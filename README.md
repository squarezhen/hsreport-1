## 合作文档

### 栏目
学年、学期、课程、专业、院系部门、教师、学生、课程学生、提交材料（明细）、课程作业

#### 人员信息管理：

1 学生信息 ：学号，姓名，性别，年级，专业
2 教师信息：编号，姓名，性别 ，院系，职称
3 教师任课信息：学年，学期，教师姓名，所教课程 ，课时
4 课程学生信息：学年，学期，课程编码，课程名称，教师，学号，姓名，年级，成绩

#### 课程材料提交：

1 课程信息设置：学年，学期，编号，教师姓名，课程名称，实验报告提交次数，作业次数，考试次数
2 课程作业设置：学年，学期，作业id，作业序号，作业名称，开始提交，截止时间
3 学生材料提交：学年，学期，学号、姓名、课程名称、作业id、作业序号，提交文件名称，提交文件，分数
4 教师提交确认：学年，学期，学号、姓名、课程名称、作业id、作业序号，提交文件名称，确认分数按钮
5 材料审核进度查询：学年，学期，学号、姓名、课程名称、作业id、作业序号，提交文件名称，审核时间，审核状态，审核意见


### 数据库表

#### 学年（base_year）

#### 学期（base_term）

#### 专业（major）
##### majorname
##### majorid

#### 院系（department）
##### d_name
##### d_id

#### 学生信息（stuinfo）
##### 	stuid
##### 	stuname
##### 	stusex
##### 	stugrade
#####   stumajor

####  教师信息(teainfo) 
##### 	teaid
##### 	teaname
##### 	teasex
#####   teadep
#####   tealevel

#### 课程信息（courseinfo）
##### 	courseyear
##### 	courseterm
##### 	courseid
##### 	coursename
##### 	courseteacher
##### 	coursetime
##### 	missioncnt

#### 课程学生信息（coursestu）
##### 	courseyear
##### 	courseterm 
##### 	courseid
##### 	coursename
##### 	courseteacher
##### 	stuid
##### 	stugrade
##### 	stuscore

#### 课程作业（coursework）
##### 	workyear
##### 	workterm 
##### 	workid
##### 	workname
##### 	workpath
##### 	workscore
