<?php

class UploadsController extends AppController {

    public function index() {
        $userId = $this->Auth->user('id');
        $dir = new Folder(WWW_ROOT.'files/upload/'.$userId);
        $files = $dir->read();


        $userfilesize = 0;
        for ($i = 0; $i <= count($files[1])-1; $i++) {
            $userfilesize += filesize(WWW_ROOT.'files/upload/'.$userId.'/'.$files[1][$i]);
        }

        $this->set('files', $files);
        $this->set('userfilesize', $userfilesize);
    }

    public function upload() {
        $file = $this->params->form['file'];
        $userId = $this->Auth->user('id');
        $dir = new Folder(WWW_ROOT.'files/upload/'.$userId);
        $files = $dir->read();


        $userfilesize = 0;
        for ($i = 0; $i <= count($files[1])-1; $i++) {
            $userfilesize += filesize(WWW_ROOT.'files/upload/'.$userId.'/'.$files[1][$i]);
        }

        $this->set('files', $files);
        $this->set('userfilesize', $userfilesize);

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
