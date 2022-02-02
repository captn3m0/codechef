---
{"category_name":"school","problem_code":"SSCRIPT","problem_name":"Strong Language","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 2\r\n*a*b*\r\n5 2\r\n*a**b\r\n5 1\r\nabcde","output":"NO\r\nYES\r\nNO","explanation":"**Example case 1:** Since there are no two consecutive characters \u0027*\u0027, the string does not contain strong language.\r\n\r\n**Example case 2:** There are two adjacent characters \u0027*\u0027, so the string contains strong language.\r\n\r\n**Example case 3:** Since there are no characters \u0027*\u0027 in the string, it does not contain strong language.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/qpVg3MzWSCI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"30-03-2021","tags":{"0":"april21","1":"cakewalk","2":"daanish_adm","3":"looping"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SSCRIPT","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SSCRIPT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/SSCRIPT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/SSCRIPT.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/SSCRIPT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/SSCRIPT.pdf) as well.

A string is said to be using *strong language* if it contains at least $K$ consecutive characters '*'.

You are given a string $S$ with length $N$. Determine whether it uses strong language or not.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains a single string $S$ with length $N$. 

### Output
Print a single line containing the string `"YES"` if the string contains strong language or `"NO"` if it does not (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints 
- $1 \leq T \leq 10$
- $1 \leq K \leq N \leq 10^6$
- $S$ contains only lowercase English letters and characters '*'
- Sum of $N$ over all testcases is atmost $10^6$.

### Subtasks
**Subtask #1 (30 points):** $N \leq 10^4$, Sum of $N$ over all testcases is atmost $10^4$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
5 2
*a*b*
5 2
*a**b
5 1
abcde
```

### Example Output
```
NO
YES
NO
```

### Explanation
**Example case 1:** Since there are no two consecutive characters '*', the string does not contain strong language.

**Example case 2:** There are two adjacent characters '*', so the string contains strong language.

**Example case 3:** Since there are no characters '*' in the string, it does not contain strong language.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>