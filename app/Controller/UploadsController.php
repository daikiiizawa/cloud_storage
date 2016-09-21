<?php

class UploadsController extends AppController {

    public function index() {
        $userId = $this->Auth->user('id');
        $dir = new Folder(WWW_ROOT.'files/upload/'.$userId);
        $files = $dir->read();
        $this->set('files', $files);
    }

    // public function add() {
    //     if ($this->request->is('post')) {
    //         $tmp = $this->request->data['Upload']['file']['tmp_name'];
    //         if(is_uploaded_file($tmp)) {
    //             $file_name = basename($this->request->data['Upload']['file']['name']);
    //             $file = WWW_ROOT.'files'.DS.$file_name;
    //             if (move_uploaded_file($tmp, $file)) {
    //                 $this->Upload->create();
    //                 $this->request->data['Upload']['file_name'] = $file_name;
    //                 if ($this->Upload->saveAll($this->request->data)) {
    //                     $this->Flash->success(__('アップロード完了'));
    //                     $this->redirect(array('action' => 'index'));
    //                 } else {
    //                     $this->Flash->error(__('アップロード失敗'));
    //                 }
    //             }
    //         }
    //     }
    // }

    public function upload() {
        $file = $this->params->form['file'];
        $userId = $this->Auth->user('id');
        if ($this->request->is('post')) {
            $tempFile = $file['tmp_name'];
            $targetPath = WWW_ROOT.'files/upload/'.$userId;
            $targetFile = $targetPath.DS.$file['name'];
            move_uploaded_file($tempFile, $targetFile);
            $this->Flash->success('アップロード成功');
            $this->redirect(array('action' => 'index'));
        }
    }
}
