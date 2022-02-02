---
{"category_name":"school","problem_code":"HOOPS","problem_name":"Hoop Jump","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1\r\n3","output":"1\r\n2","explanation":"**Test Case $1$:** Since there is only $1$ hoop, that\u0027s the only one to be jumped into.\r\n\r\n**Test Case $2$:** The first player jumps into hoop $1$. The second player jumps into hoop $3$ and finally the first player jumps into hoop $2$. Then the second player cannot make another jump, so the process stops.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/sMBOwjQgpk4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"26-04-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime96"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HOOPS","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HOOPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/HOOPS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/HOOPS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/HOOPS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/HOOPS.pdf) as well.

You and your friend are playing a game with hoops. There are $N$ hoops (where $N$ is odd) in a row. You jump into hoop $1$, and your friend jumps into hoop $N$. Then you jump into hoop $2$, and after that, your friend jumps into hoop $N-1$, and so on.

The process ends when someone cannot make the next jump because the hoop is occupied by the other person. Find the last hoop that will be jumped into.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, a single integer $N$. 

###Output
For each testcase, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq N \lt 2\cdot 10^5$
- $N$ is odd

###Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input
```
2
1
3
```

###Sample Output
```
1
2
```
	
###Explanation
**Test Case $1$:** Since there is only $1$ hoop, that's the only one to be jumped into.

**Test Case $2$:** The first player jumps into hoop $1$. The second player jumps into hoop $3$ and finally the first player jumps into hoop $2$. Then the second player cannot make another jump, so the process stops.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>