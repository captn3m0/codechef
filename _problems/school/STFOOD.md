---
{"category_name":"school","problem_code":"STFOOD","problem_name":"Chef and Street Food","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n4 6 8\r\n2 6 6\r\n1 4 3\r\n1\r\n7 7 4","output":"12\r\n0","explanation":"**Example case 1:** Chef should offer food of the second type. On each day, two people would buy from him, so his daily profit would be $12$.\r\n\r\n**Example case 2:** Chef has no option other than to offer the only type of food, but he does not expect anyone to buy from him anyway, so his daily profit is $0$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"23-01-2020","tags":{"0":"cakewalk","1":"kingofnumbers","2":"ltime80","3":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/STFOOD","time":{"view_start_date":1579971602,"submit_start_date":1579971602,"visible_start_date":1579971602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STFOOD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME80/hindi/STFOOD.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME80/bengali/STFOOD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME80/mandarin/STFOOD.pdf), [Russian](https://www.codechef.com/download/translated/LTIME80/russian/STFOOD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME80/vietnamese/STFOOD.pdf) as well.

in Chefland, there is a very famous street where $N$ types of street food (numbered $1$ through $N$) are offered. For each valid $i$, there are $S_i$ stores that offer food of the $i$-th type, the price of one piece of food of this type is $V_i$ (the same in each of these stores) and each day, $P_i$ people come to buy it; each of these people wants to buy one piece of food of the $i$-th type.

Chef is planning to open a new store at this street, where he would offer food of one of these $N$ types. Chef assumes that the people who want to buy the type of food he'd offer will split equally among all stores that offer it, and if this is impossible, i.e. the number of these people $p$ is not divisible by the number of these stores $s$, then only $\left\lfloor\frac{p}{s}\right\rfloor$ people will buy food from Chef.

Chef wants to maximise his daily profit. Help Chef choose which type of food to offer and find the maximum daily profit he can make.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$. 
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains three space-separated integers $S_i$, $P_i$ and $V_i$.

### Output
For each test case, print a single line containing one integer ― the maximum profit.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100$
- $1 \le S_i, V_i, P_i \le 10,000$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
3
4 6 8
2 6 6
1 4 3
1
7 7 4
```

### Example Output
```
12
0
```
	
### Explanation
**Example case 1:** Chef should offer food of the second type. On each day, two people would buy from him, so his daily profit would be $12$.

**Example case 2:** Chef has no option other than to offer the only type of food, but he does not expect anyone to buy from him anyway, so his daily profit is $0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>