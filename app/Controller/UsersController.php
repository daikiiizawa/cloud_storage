<?php

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('add');
    }

    public function add() {
        if ($this->Auth->user()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                return $this->redirect(['action' => 'login']);
            }
        }
    }

    public function login() {

        if ($this->Auth->user()) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirectUrl());
            }

            $this->Flash->error('メールアドレスかパスワードが違います');
        }
    }

    public function logout() {
        $this->Flash->success('ログアウトしました');
        $this->redirect($this->Auth->logout());
    }

}