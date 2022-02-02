---
{"category_name":"easy","problem_code":"BDGFT","problem_name":"Birthday Gift Again","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n010001\r\n10","output":"4\r\n1","explanation":"**Example case 1:** The special substrings correspond to $(i, j) = (1, 2), (1, 6), (2, 3), (5, 6)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ezio_26","problem_tester":null,"date_added":"11-07-2019","tags":{"0":"brute","1":"cook108","2":"ezio_26","3":"prefix","4":"sliding","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Sliding Window","editorial_url":"https://discuss.codechef.com/problems/BDGFT","time":{"view_start_date":1563733802,"submit_start_date":1563733802,"visible_start_date":1563733802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BDGFT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK108/hindi/BDGFT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK108/mandarin/BDGFT.pdf), [Russian](https://www.codechef.com/download/translated/COOK108/russian/BDGFT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK108/vietnamese/BDGFT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK108/bengali/BDGFT.pdf) as well.

All strings in Chefland are beautiful because they are binary strings (a binary string contains only characters '0' and '1'). The *beauty* of a binary string $S$ is defined as the number of pairs $(i, j)$ ($1 \le i \le j \le |S|$) such that the substring $S_i, S_{i+1}, \ldots, S_j$ is special.

For a binary string $U$, let's denote the number of occurrences of the characters '1' and '0' in $U$ by $cnt_1$ and $cnt_0$ respectively; then, $U$ is *special* if $cnt_0 = cnt_1 \cdot cnt_1$.

Today, Chef's friend Araspa is celebrating her birthday. Chef wants to give Araspa the most beautiful binary string he can find. Currently, he is checking out binary strings in a shop, but he needs your help to calculate their beauties. Tell Chef the beauty of each binary string he gives you.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing one integer — the beauty of the string $S$.

### Constraints 
- $1 \le T \le 10$
- $1 \le |S| \le 10^5$
- each character of $S$ is '0' or '1'

### Example Input
```
2
010001
10
```

### Example Output
```
4
1
```

### Explanation
**Example case 1:** The special substrings correspond to $(i, j) = (1, 2), (1, 6), (2, 3), (5, 6)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>