---
{"category_name":"medium","problem_code":"BINARYGA","problem_name":"Binary Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n1 1 1 2 1 1 1 2 1 1 1 2 1 1 1 2","output":3,"explanation":"Since $1 \\oplus 1 = 2 \\oplus 2 = 0$ and $1 \\oplus 2 = 3$, it is easy to see that we should let $a_1=a_3=a_5=a_7=2$ and all the remaining elements $a_i$ should be $1$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"minh2345","problem_tester":"","date_added":"2-01-2021","tags":{"0":"backtracking","1":"ltime94","2":"medium","3":"minh2345"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/BINARYGA","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BINARYGA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/BINARYGA.pdf)

You are given a sequence of $16N$ positive integers $a_1,a_2,\ldots,a_{16N}$. You may shuffle  this sequence in any way you choose, i.e. change it to any one of its permutations. Then, let
$$x=(a_1 \oplus a_2) \otimes (a_3 \oplus a_4) \otimes \ldots \otimes (a_{8N-1} \oplus a_{8N}) \,,$$
$$y=(a_{8N+1} \oplus a_{8N+2}) \otimes (a_{8N+3} \oplus a_{8N+4}) \otimes \ldots \otimes (a_{16N-1} \oplus a_{16N}) \,,$$

where $\otimes$ and $\oplus$ denote bitwise AND and XOR respectively.

Find the maximum possible value of $x-y$.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $16N$ space-separated integers $a_1,a_2,\ldots,a_{16N}$.

### Output
Print a single line containing one integer — the maximum value of $x-y$.

### Constraints
- $1\le N \le 10^4$
- $1\le a_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
1 1 1 2 1 1 1 2 1 1 1 2 1 1 1 2
```

### Example Output
```
3
```

### Explanation
Since $1 \oplus 1 = 2 \oplus 2 = 0$ and $1 \oplus 2 = 3$, it is easy to see that we should let $a_1=a_3=a_5=a_7=2$ and all the remaining elements $a_i$ should be $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>