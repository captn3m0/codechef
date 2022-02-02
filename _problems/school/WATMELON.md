---
{"category_name":"school","problem_code":"WATMELON","problem_name":"Watermelon","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1\r\n-1\r\n2\r\n1 2","output":"NO\r\nYES","explanation":"**Example case 2:** We can perform two operations ? subtract $1$ from $A_1$ and $2$ from $A_2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/k6G07av1AjQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_trygub","problem_tester":"","date_added":"14-09-2020","tags":{"0":"anton_trygub","1":"cakewalk","2":"ltime88","3":"math","4":"observation"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WATMELON","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WATMELON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME88/hindi/WATMELON.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME88/bengali/WATMELON.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME88/mandarin/WATMELON.pdf), [Russian](https://www.codechef.com/download/translated/LTIME88/russian/WATMELON.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME88/vietnamese/WATMELON.pdf) as well.

Let's call a sequence *good* if the sum of all its elements is $0$.

You have a sequence of integers $A_1, A_2, \ldots, A_N$. You may perform any number of operations on this sequence (including zero). In one operation, you should choose a valid index $i$ and decrease $A_i$ by $i$. Can you make the sequence good using these operations?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to make the given sequence good or `"NO"` if it is impossible.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10$
- $|A_i| \le 100$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $N = 1$

**Subtask #2 (30 points):** $N \le 2$

**Subtask #3 (60 points):** original constraints

### Example Input
```
2
1
-1
2
1 2
```

### Example Output
```
NO
YES
```

### Explanation
**Example case 2:** We can perform two operations ― subtract $1$ from $A_1$ and $2$ from $A_2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>