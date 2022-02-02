---
{"category_name":"school","problem_code":"EOOPR","problem_name":"The One Who Knocks!","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aman1108","problem_tester":"","date_added":"12-10-2020","tags":{"0":"aman1108","1":"cakewalk","2":"infy20"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EOOPR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EOOPR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
*“I am not in danger, Skyler. I am the danger. A guy opens his door and gets shot, and you think that of me? No! I am the one who knocks!”*

Skyler fears Walter and ponders escaping to Colorado. Walter wants to clean his lab as soon as possible and then go back home to his wife. 

In order clean his lab, he has to achieve cleaning level of lab as $Y$. The current cleaning level of the lab is $X$. 

He must choose one positive **odd** integer $a$ and one positive **even** integer $b$. Note that, he cannot change $a$ or $b$ once he starts cleaning.

He can perform any one of the following operations for one round of cleaning:  
  1. Replace $X$ with $X+a$.  
  2. Replace $X$ with $X-b$.

Find minimum number of rounds (possibly zero) to make lab clean.

###Input:

- First line will contain $T$, number of test cases. $T$ testcases follow :  
- Each test case contains two space separated integers $X, Y$. 

###Output:
For each test case, output an integer denoting minimum number of rounds to clean the lab.
###Constraints 
- $1 \leq T \leq 10^5$
- $ |X|,|Y| \leq 10^9$

###Sample Input:
	3
	0 5
	4 -5
	0 10000001

###Sample Output:
	1
	2
	1
	
###EXPLANATION:
- For the first testcase, you can convert $X$ to $Y$  by choosing $a=5$ and $b=2$.   
It will cost minimum of $1$ cleaning round. You can select any other combination of $a, b$ satisfying above condition but will take minimum of $1$ cleaning round in any case.

- For the second testcase, you can convert $X$ to $Y$ by choosing $a=1$ and $b=10$. In first round they will replace $X$ to $X+a$ and then in second round replace to $X-b$. You can perform only one operation in one round.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>