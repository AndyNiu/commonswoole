<?php
/**
 * Created by PhpStorm.
 * User: xiemin
 * Date: 2015/11/10
 * Time: 10:53
 * Description: ����ĺ�������
 */

return array(
    /*
     * swoole�Ļ�������
     */
    'swoole' => array(
        'swoole_host' => '0.0.0.0',
        'swoole_port' => 7000,
        'worker_num' => 16, // ������
        'task_worker_num' => 16, //���������
        'max_request' => 100000,
        'log_file' => '/data/logs/commonSwoole/commonSwoole.log',
        'debug' => true,
        'gzip' => false,
        'progname' => 'commonswoole'
    ),

    /**
     *ҵ�����ã�key: ������ value��process ��ʾ����̹���ģʽ  http ��ʾhttp������Ӧ�Ĺ���ģʽ
     */
    'business' => array(
        'MongoTest' => array(
            'type' => array('process'),
            'online' => false
        ),
        'RedisTest' => array(
            'type' => array('http'),
            'online' => false
        ),
        'QueueTest' => array(
            'type' => array('process'),
            'online' => false
        ),
        'ProcessTest' => array(
            'type' => array('process'),
            'online' => false
        ),
        'HttpTest' => array(
            'type' => array('http'),
            'online' => false
        ),
        'SShTest' => array(
            'type' => array('process'),
            'online' => false
        ),
        'BloomTest'=>array(
            'type'=> array('http'),
            'online'=> false
        ),
        'IPTest'=>array(
            'type'=>array('http'),
            'online'=>false
        ),
        'MessageQueueTest'=>array(
            'type'=>array('process'),
            'online'=>false
        ),
        'DataTransTest' => array(
            'type' => array('process'),
            'online' => false
        ),
        'DiffUserTags' => array(
            'type' => array('process'),
            'online' => false
        ),
        'MemcacheTest' => array(
            'type' => array('process'),
            'online' => true
        )
    ),

    /**
     * ��ʾ���񽨹��� ���������ļ�Ŀ¼��Ϣ�����岻�� ���濼���Ż�
     */
    'workpath' => array(
        'LOGIC' => WORKROOT . '/logic/',
        'CONFIG' => WORKROOT . '/conf/',
        'LIB' => WORKROOT . '/lib/'
    )
);