---
{"category_name":"easy","problem_code":"GUESSNUM","problem_name":"Guess the number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 35\r\n5 50\r\n4 65","output":"1\r\n10\r\n0\r\n\r\n3\r\n13 15 16","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"28-12-2019","tags":{"0":"ad","1":"deadwing97","2":"easy","3":"kingofnumbers","4":"ltime79"},"problem_difficulty_level":"Easy","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/GUESSNUM","time":{"view_start_date":1577552402,"submit_start_date":1577552402,"visible_start_date":1577552402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GUESSNUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef is playing a game with his brother Chefu. He asked Chefu to choose a positive integer $N$, multiply it by a given integer $A$, then choose a divisor of $N$ (possibly $N$ itself) and add it to the product. Let's denote the resulting integer by $M$; more formally, $M = A \cdot N + d$, where $d$ is some divisor of $N$.

Chefu told Chef the value of $M$ and now, Chef should guess $N$. Help him find all values of $N$ which Chefu could have chosen.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $A$ and $M$.

### Output
For each test case, print two lines. The first line should contain a single integer $C$ denoting the number of possible values of $N$. The second line should contain $C$ space-separated integers denoting all possible values of $N$ in increasing order.

It is guaranteed that the sum of $C$ over all test cases does not exceed $10^7$.

### Constraints
- $1 \le T \le 100$
- $2 \le M \le 10^{10}$
- $1 \le A \lt M$


### Subtasks
**Subtask #1 (50 points):**
- $M \le 10^6$

**Subtask #2 (50 points):** original constraints


### Example Input
```
3
3 35
5 50
4 65
```

### Example Output
```
1
10
0

3
13 15 16
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>