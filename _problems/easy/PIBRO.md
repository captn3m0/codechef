---
{"category_name":"easy","problem_code":"PIBRO","problem_name":"Pizza or Broccoli ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n13 2\r\n0101110000101\r\n6 3\r\n100001","output":"5\r\n4","explanation":"**Example case 1:** Chefu can choose the substring $A[2, 3]$ = \u002210\u0022, and change the third character of $A$ to \u00271\u0027. Then, the pizza time is $5$ days: from day $2$ to day $6$.\r\n\r\n**Example case 2:** Chefu can choose the substring $A[2, 4]$ = \u0022000\u0022. Then, the pizza time is $4$ days: from day $1$ to day $4$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"28-11-2019","tags":{"0":"ad","1":"deadwing97","2":"easy","3":"kingofnumbers","4":"ltime78"},"problem_difficulty_level":"Easy","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/PIBRO","time":{"view_start_date":1575133202,"submit_start_date":1575133202,"visible_start_date":1575133202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PIBRO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME78/bengali/PIBRO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME78/mandarin/PIBRO.pdf), [Russian](https://www.codechef.com/download/translated/LTIME78/russian/PIBRO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME78/vietnamese/PIBRO.pdf) as well.

On each of the following $N$ days (numbered $1$ through $N$), Chef is planning to cook either pizza or broccoli. He wrote down a string $A$ with length $N$, where for each valid $i$, if the character $A_i$ is '1', then he will cook pizza on the $i$-th day, while if $A_i$ is '0', he will cook broccoli on this day.

Chefu, his son, loves pizza but hates broccoli ― just like most kids. He wants to select a substring of $A$ with length $K$ and change each character '0' in this substring to '1'. Afterwards, let's define *pizza time* as the maximum number of consecutive days where Chef will cook pizza. Find the maximum pizza time Chefu can achieve.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$. 
- The second line contains a string $A$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the maximum pizza time.

### Constraints
- $1 \le T \le 1,000$
- $1 \le K \le N \le 10^5$
- $A$ contains only characters '0' and '1'
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 10^3$
- the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
13 2
0101110000101
6 3
100001
```

### Example Output
```
5
4
```


### Explanation
**Example case 1:** Chefu can choose the substring $A[2, 3]$ = "10", and change the third character of $A$ to '1'. Then, the pizza time is $5$ days: from day $2$ to day $6$.

**Example case 2:** Chefu can choose the substring $A[2, 4]$ = "000". Then, the pizza time is $4$ days: from day $1$ to day $4$.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>