<?php


class JacketModel extends  BaseModel
{
    /**
     * @var JacketsRepository
     */
    private  $jacketRepo;

    public  function __construct() {
        $this->jacketRepo = new JacketsRepository();
    }

    /**
     * @param $data
     * @return bool
     */
    public function create($data)
    {
        return $this->jacketRepo->create($data);
    }

    /**
     * @param $jacket_id
     * @return mixed
     * show only one item
     */
    public function view($jacket_id) {
        return $this->jacketRepo->getById($jacket_id);
    }

    /**
     * @return array|mixed
     */
    public function listAll()
    {
        return $this->jacketRepo->getAll();
    }

    /**
     * @param $topic
     * @return mixed
     */
    public function search($topic){
        return $this->jacketRepo->getAllByTopic($topic);
    }
    /**
     * @param $data
     * @return bool|mixed
     */
    public function update($data)
    {
        return $this->jacketRepo->update($data);
    }

    /**
     * @param $jacket_id
     * @return bool|mixed
     */
    public function delete($jacket_id)
    {
        return $this->jacketRepo->delete($jacket_id);
    }
}