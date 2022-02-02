---
{"category_name":"school","problem_code":"MATCHES","problem_name":"Playing with Matches","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n123 234\r\n10101 1010\r\n4 4","output":"13\r\n10\r\n7","explanation":"**Example case 1:** The result is $357$. We need $5$ matches to write the digit $3$, $5$ matches to write the digit $5$ and $3$ matches to write the digit $7$.\r\n\r\n**Example case 2:** The result is $11111$. We need $2$ matches to write each digit $1$, which is $2 \\cdot 5 = 10$ matches in total.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/cwxAx4SRM5c","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"","date_added":"22-09-2019","tags":{"0":"cakewalk","1":"cook110","2":"kingofnumbers","3":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MATCHES","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MATCHES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK110/mandarin/MATCHES.pdf), [Russian](https://www.codechef.com/download/translated/COOK110/russian/MATCHES.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK110/vietnamese/MATCHES.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK110/bengali/MATCHES.pdf) as well.

Chef's son Chefu found some matches in the kitchen and he immediately starting playing with them.

The first thing Chefu wanted to do was to calculate the result of his homework — the sum of $A$ and $B$, and write it using matches. Help Chefu and tell him the number of matches needed to write the result.

Digits are formed using matches in the following way:
![](https://codechef_shared.s3.amazonaws.com/download/Images/COOK110/MATCHES/97JCfQw.gif)

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $A$ and $B$.

### Output
For each test case, print a single line containing one integer — the number of matches needed to write the result ($A+B$).

### Constraints
- $1 \le T \le 1,000$
- $1 \le A, B \le 10^6$

### Example Input
```
3
123 234
10101 1010
4 4
```

### Example Output
```
13
10
7
```
	
### Explanation
**Example case 1:** The result is $357$. We need $5$ matches to write the digit $3$, $5$ matches to write the digit $5$ and $3$ matches to write the digit $7$.

**Example case 2:** The result is $11111$. We need $2$ matches to write each digit $1$, which is $2 \cdot 5 = 10$ matches in total.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>