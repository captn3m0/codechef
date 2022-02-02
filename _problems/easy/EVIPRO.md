---
{"category_name":"easy","problem_code":"EVIPRO","problem_name":"The Evil Professor","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n001","output":6,"explanation":"**Example case 1:**\r\n- $L = 1, R = 1$: $U$ is \u0022101\u0022, $F = 0$\r\n- $L = 2, R = 2$: $U$ is \u0022011\u0022, $F = 1$\r\n- $L = 3, R = 3$: $U$ is \u0022000\u0022, $F = 2$\r\n- $L = 1, R = 2$: $U$ is \u0022111\u0022, $F = 2$\r\n- $L = 2, R = 3$: $U$ is \u0022010\u0022, $F = 0$\r\n- $L = 1, R = 3$: $U$ is \u0022110\u0022, $F = 1$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"i_love_islam","problem_tester":null,"date_added":"25-12-2019","tags":{"0":"ad","1":"deadwing97","2":"easy","3":"i_love_islam","4":"ltime79"},"problem_difficulty_level":"Easy","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/EVIPRO","time":{"view_start_date":1577552402,"submit_start_date":1577552402,"visible_start_date":1577552402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EVIPRO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME79/hindi/EVIPRO.pdf),[Bengali](https://www.codechef.com/download/translated/LTIME79/bengali/EVIPRO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME79/mandarin/EVIPRO.pdf), [Russian](https://www.codechef.com/download/translated/LTIME79/russian/EVIPRO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME79/vietnamese/EVIPRO.pdf) as well.

Do you know Professor Saeed? He is the algorithms professor at Damascus University. Yesterday, he gave his students hard homework (he is known for being so evil) - for a given binary string $S$, they should compute the sum of $F(S, L, R)$ over all pairs of integers $(L, R)$ ($1 \le L \le R \le |S|$), where the function $F(S, L, R)$ is defined as follows:
- Create a string $U$: first, set $U = S$, and for each $i$ ($L \le i \le R$), flip the $i$-th character of $U$ (change '1' to '0' or '0' to '1').
- Then, $F(S, L, R)$ is the number of valid pairs $(i, i + 1)$ such that $U_i = U_{i+1}$.

As usual, Professor Saeed will give more points to efficient solutions. Please help the students solve this homework.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing one integer $\sum_{1 \le L \le R \le |S|} F(S, L, R)$.

### Constraints
- $1 \le T \le 100$
- $1 \le |S| \le 3 \cdot 10^6$
- the sum of $|S|$ over all test cases does not exceed $6 \cdot 10^6$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le |S| \le 300$
- the sum of $|S|$ over all test cases does not exceed $600$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
001
```

### Example Output
```
6
```

### Explanation
**Example case 1:**
- $L = 1, R = 1$: $U$ is "101", $F = 0$
- $L = 2, R = 2$: $U$ is "011", $F = 1$
- $L = 3, R = 3$: $U$ is "000", $F = 2$
- $L = 1, R = 2$: $U$ is "111", $F = 2$
- $L = 2, R = 3$: $U$ is "010", $F = 0$
- $L = 1, R = 3$: $U$ is "110", $F = 1$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>