---
{"category_name":"easy","problem_code":"MAXSCOR","problem_name":"Maximum Score","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 2\r\n1 1\r\n2 1\r\n3 3\r\n1 1\r\n2 2\r\n3 3\r\n5 6\r\n5 1\r\n4 2\r\n3 3\r\n2 4\r\n1 5","output":"2\r\n2\r\n9","explanation":"**TestCase 1:** Optimal solution is to study first chapter first followed by second chapter. So total marks ensured $= 1 + 2 - 1 = 2$\r\n\r\n**TestCase 2:** Optimal solution is to study first chapter first followed by second chapter. So total marks ensured $= 1 + 2 - 1 = 2$\r\n\r\n**TestCase 3:** Optimal solution is to study third chapter first followed by second and first chapter. So total marks ensured $= 3 + 4 + 5 - 3 = 9$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/OIRc2EZLivE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"14-01-2021","tags":{"0":"daanish_adm","1":"dynamic","2":"easy","3":"start2"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/MAXSCOR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXSCOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef's college is conducting online exams. Chef has a test tomorrow and he being irresponsible failed to prepare for it on time (just as always). However, fortunately, he now realises the gravity of the situation and decides to prepare as much as possible in the time remaining and try to score maximum marks possible using his analytical skills. 

There are $N$ chapters and only $K$ minutes are left before the exam. Chapter $i$ will be worth $M_i$ marks in the exam, and shall take $T_i$ minutes to study. Chef can study the chapters in any order but needs to study them completely and at most once. He knows that he will forget the first chapter that he will prepare (due to lack of sleep) and won’t be able to score any marks in it. Find the maximum marks that Chef can score in the exam. 

Note that he cannot re-study the chapter that he has forgotten.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contain $N + 1$ lines of input.
- First line will contain $2$ space separated integers $N$ and $K$, total number of chapters and total time left before the exam respectively. 
- Each of the next $N$ lines contain $2$ space separated integers $M_i$ and $T_i$, weightage and time for the $i^{th}$ chapter respectively.

###Output:
For each testcase, output in a single line answer to the problem.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^3$
- $1 \leq K \leq 10^4$
- $1 \leq M_i \leq 10^9$
- $1 \leq T_i \leq K$
- Sum of $N * K$ over all tests is atmost $10^7$

###Sample Input:
```
3
2 2
1 1
2 1
3 3
1 1
2 2
3 3
5 6
5 1
4 2
3 3
2 4
1 5
```

###Sample Output:
```
2
2
9
```
	
###Explanation:
**TestCase 1:** Optimal solution is to study first chapter first followed by second chapter. So total marks ensured $= 1 + 2 - 1 = 2$

**TestCase 2:** Optimal solution is to study first chapter first followed by second chapter. So total marks ensured $= 1 + 2 - 1 = 2$

**TestCase 3:** Optimal solution is to study third chapter first followed by second and first chapter. So total marks ensured $= 3 + 4 + 5 - 3 = 9$
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>