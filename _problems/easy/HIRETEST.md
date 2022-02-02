---
{"category_name":"easy","problem_code":"HIRETEST","problem_name":"Hiring Test","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4 5\r\n3 2\r\nFUFFP\r\nPFPFU\r\nUPFFU\r\nPPPFP\r\n3 4\r\n1 3\r\nPUPP\r\nUUUU\r\nUFUU\r\n1 3\r\n2 2\r\nPPP","output":"1100\r\n101\r\n0","explanation":"- **Sample Test 1:** There are $4$ candidates and $5$ problems. Each candidate needs to solve $3$ or more problems completely, or $2$ problems completely and $2$ or more problems partially. Only the first and the second candidates satisfy this.\r\n\r\n- **Sample Test 2:** The candidates need to either solve at least one problem completely, or they need to solve three or more problems partially. Only candidates $1$ and $3$ satisfy this.\r\n\r\n- **Sample Test 3:** The candidate needs to either solve two or more problems completely, or solve at least one problems completely and two problems partially. The candidate does not satisfy this.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/KfMLs9F_NXk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"2-04-2021","tags":{"0":"akash_adm","1":"simple","2":"start3","3":"vichitr"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HIRETEST","time":{"view_start_date":1619357400,"submit_start_date":1619357400,"visible_start_date":1619357400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HIRETEST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
A company conducted a coding test to hire candidates. $N$ candidates appeared for the test, and each of them faced $M$ problems. Each problem was either unsolved by a candidate (denoted by 'U'), solved partially (denoted by 'P'), or solved completely (denoted by 'F'). 

To pass the test, each candidate needs to either solve $X$ or more problems completely, or solve $(X-1)$ problems completely, and $Y$ or more problems partially.

Given the above specifications as input, print a line containing $N$ integers. The $i^{th}$ integer should be $1$ if the $i^{th}$ candidate has passed the test, else it should be $0$.


###Input:

- The first line of the input contains an integer $T$, denoting the number of test cases.
- The first line of each test case contains two space-separated integers, $N$ and $M$, denoting the number of candidates who appeared for the test, and the number of problems in the test, respectively.
- The second line of each test case contains two space-separated integers, $X$ and $Y$, as described above, respectively.
- The next $N$ lines contain $M$ characters each. The $j^{th}$ character of the $i^{th}$ line denotes the result of the $i^{th}$ candidate in the $j^{th}$ problem. 'F' denotes that the problem was solved completely, 'P' denotes partial solve, and 'U' denotes that the problem was not solved by the candidate.

###Output:

For each test case, print a single line containing $N$ integers. The $i^{th}$  integer denotes the result of the $i^{th}$ candidate. $1$ denotes that the candidate passed the test, while $0$ denotes that he/she failed the test.

###Constraints 
- $1 \le T \le 100$
- $1 \le N \le 100$
- $2 \le M \le 100$
- $1 \le X, Y \le M$
- $1 \le (X-1)+Y \le M$

###Sample Input:
```
3
4 5
3 2
FUFFP
PFPFU
UPFFU
PPPFP
3 4
1 3
PUPP
UUUU
UFUU
1 3
2 2
PPP
```
###Sample Output:
```
1100
101
0
```
###Explanation:

- **Sample Test 1:** There are $4$ candidates and $5$ problems. Each candidate needs to solve $3$ or more problems completely, or $2$ problems completely and $2$ or more problems partially. Only the first and the second candidates satisfy this.

- **Sample Test 2:** The candidates need to either solve at least one problem completely, or they need to solve three or more problems partially. Only candidates $1$ and $3$ satisfy this.

- **Sample Test 3:** The candidate needs to either solve two or more problems completely, or solve at least one problems completely and two problems partially. The candidate does not satisfy this.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>