---
{"category_name":"school","problem_code":"CMPRSS","problem_name":"Compress the List","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n12\r\n1 2 3 5 6 8 9 10 11 12 15 17\r\n4\r\n4 5 7 8\r\n1\r\n4","output":"1...3,5,6,8...12,15,17\r\n4,5,7,8\r\n4","explanation":"**Example case 1:**\r\n- $(1, 2, 3)$ is a contiguous subsequence with length $3$, so it is replaced by the string `\u00221...3\u0022`\r\n- $(5, 6)$ is a contiguous subsequence, but only with length $2$, so it is not compressed into a range\r\n- $(8, 9, 10, 11, 12)$ is a contiguous subsequence with length $5$, so it is replaced by `\u00228...12\u0022`\r\n- the elements $15$, $17$ are unaffected","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jafarbadour","problem_tester":null,"date_added":"29-11-2019","tags":{"0":"cakewalk","1":"deadwing97","2":"jafarbadour","3":"ltime78"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CMPRSS","time":{"view_start_date":1575133202,"submit_start_date":1575133202,"visible_start_date":1575133202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CMPRSS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME78/bengali/CMPRSS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME78/mandarin/CMPRSS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME78/russian/CMPRSS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME78/vietnamese/CMPRSS.pdf) as well.

You are given a strictly increasing sequence of integers $A_1, A_2, \ldots, A_N$. Your task is to compress this sequence.

The *compressed form* of this sequence is a sequence of ranges separated by commas (characters ','). A *range* is either an integer or a pair of integers separated by three dots (the string `"..."`). When each range `a...b` in the compressed form is decompressed into the subsequence $(a, a+1, \ldots, b)$, we should obtain the (comma-separated) sequence $A$ again.

For each maximal contiguous subsequence $(a, a+1, \ldots, b)$ of $A$ such that $b \ge a+2$, the compressed form of $A$ must contain the range `a...b`; if $b \le a+1$, such a sequence should not be compressed into a range. A contiguous subsequence is maximal if it cannot be extended by at least one element of $A$ next to it. It can be proved that the compressed form of any sequence is unique (i.e. well-defined).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one string ― the compressed form of the given sequence.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100$
- $1 \le A_i \le 1,000$ for each valid $i$
- $A_1 \lt A_2 \lt \ldots \lt A_N$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
12
1 2 3 5 6 8 9 10 11 12 15 17
4
4 5 7 8
1
4
```

### Example Output
```
1...3,5,6,8...12,15,17
4,5,7,8
4
```
	
### Explanation
**Example case 1:**
- $(1, 2, 3)$ is a contiguous subsequence with length $3$, so it is replaced by the string `"1...3"`
- $(5, 6)$ is a contiguous subsequence, but only with length $2$, so it is not compressed into a range
- $(8, 9, 10, 11, 12)$ is a contiguous subsequence with length $5$, so it is replaced by `"8...12"`
- the elements $15$, $17$ are unaffected


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>