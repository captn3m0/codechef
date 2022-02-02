---
{"category_name":"medium","problem_code":"MNMXAR","problem_name":"Minimum and Maximum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n3\n2 1 3","output":8,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ezio_26","problem_tester":null,"date_added":"11-07-2019","tags":{"0":"cook108","1":"ezio_26","2":"lazy","3":"segment","4":"stack","5":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/MNMXAR","time":{"view_start_date":1563733802,"submit_start_date":1563733802,"visible_start_date":1563733802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MNMXAR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK108/hindi/MNMXAR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK108/mandarin/MNMXAR.pdf), [Russian](https://www.codechef.com/download/translated/COOK108/russian/MNMXAR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK108/vietnamese/MNMXAR.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK108/bengali/MNMXAR.pdf) as well.

Chef has a $permutation$ $P_1, P_2, \ldots, P_N$ of integers $1$ through $N$. He needs you to find the value of the sum
$$S = \sum\limits_{i=1}^{N} \sum\limits_{j=i}^{N} \mathrm{getMin}\,(i, j) \; \wedge \; \mathrm{getMax}\,(i, j) \,,$$
where $\wedge$ denotes the bitwise AND operation and
$$\mathrm{getMin}\,(i, j) = \mathrm{min}\,(P_i, P_{i+1}, \ldots, P_{j-1}, P_j) \,,$$
$$\mathrm{getMax}\,(i, j) = \mathrm{max}\,(P_i, P_{i+1}, \ldots, P_{j-1}, P_j) \,.$$

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
For each test case, print a single line containing one integer $S$.

### Constraints 
- $1 \le T \le 2$
- $1 \le N \le 10^5$
- $1 \le P_i \le N$ for each valid $i$
- $P_1, P_2, \ldots, P_N$ is a permutation

### Example Input
```
1
3
2 1 3
```

### Example Output
```
8
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>