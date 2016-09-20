<?php

class UploadsController extends AppController {

    public function index() {
        $this->Upload->recursive = 0;
        $this->set('uploads', $this->paginate());
    }

    public function add() {
        if ($this->request->is('post')) {
            $tmp = $this->request->data['Upload']['file']['tmp_name'];
            if(is_uploaded_file($tmp)) {
                $file_name = basename($this->request->data['Upload']['file']['name']);
                $file = WWW_ROOT.'files'.DS.$file_name;
                if (move_uploaded_file($tmp, $file)) {
                    $this->Upload->create();
                    $this->request->data['Upload']['file_name'] = $file_name;
                    if ($this->Upload->saveAll($this->request->data)) {
                        $this->Flash->success(__('アップロード完了'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Flash->error(__('アップロード失敗'));
                    }
                }
            }
        }
    }

}
