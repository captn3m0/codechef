---
{"category_name":"school","problem_code":"MDL","problem_name":"Medel","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n3\n2 5 3\n10\n38 9 102 10 96 7 46 28 88 13","output":"2 5 \n102 7","explanation":"**Example case 1:** We remove the element $3$ because it is the median of $(2, 5, 3)$. The final sequence is $(2, 5)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/KmQx9sGxdIw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":"","date_added":"15-10-2019","tags":{"0":"cakewalk","1":"cook111","2":"kmaaszraa","3":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MDL","time":{"view_start_date":1571596202,"submit_start_date":1571596202,"visible_start_date":1571596202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MDL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK111/hindi/MDL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK111/mandarin/MDL.pdf), [Russian](https://www.codechef.com/download/translated/COOK111/russian/MDL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK111/vietnamese/MDL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK111/bengali/MDL.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$ of distinct integers. While the sequence contains at least three elements, look at its first three elements, find the median among these elements and delete it. What will the final sequence be?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
- For each test case, print a single line containing $K$ space-separated integers, where $K$ is the length of the final sequence. For each valid $i$, the $i$-th of these integers should be the $i$-th element of the final sequence.

### Constraints
- $1 \le T \le 74$
- $3 \le N \le 19$
- $1 \le A_i \le 109$ for each valid $i$

### Example Input
```
2
3
2 5 3
10
38 9 102 10 96 7 46 28 88 13
```

### Example Output
```
2 5 
102 7 
```

### Explanation
**Example case 1:** We remove the element $3$ because it is the median of $(2, 5, 3)$. The final sequence is $(2, 5)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>