<?php
/**
 * Created by PhpStorm.
 * User: xiemin
 * Date: 2015/11/10
 * Time: 11:50
 * Description: �߼���ӿڣ�httpģʽ��ʹ��httpTaskPorcess processģʽʹ��workTaskProcess
 */

interface LogicInterface {
    /**
     * $r ��ʾswoole��request�� ��������������ȫ����Ϣ
     * @param null $r
     * @return mixed
     */
    public function httpTaskProcess($r = null);

    /**
     * $id ��ʾ�����ģʽ�µķ���id�� Ŀǰ��֧��id : 0->workernum-1�� ʹ���߿���ֱ��
     * ʹ�ã��������ڼ���ҵ���߼��У�����id�Լ���ӳ��ʹ��
     * @param int $id
     * @return mixed
     */
    public function workTaskProcess($data = null);
}