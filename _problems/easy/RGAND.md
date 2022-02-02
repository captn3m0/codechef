---
{"category_name":"easy","problem_code":"RGAND","problem_name":"Range AND","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1 4\r\n4 10","output":"1\r\n16","explanation":"**Example case 1:** The sum is 1 + 1 AND 2 + 1 AND 2 AND 3 + 1 AND 2 AND 3 AND 4 = 1 + 0 + 0 + 0 = 1.\r\n\r\n**Example case 2:** The sum is 4 + 4 AND 5 + 4 AND 5 AND 6 + 4 AND 5 AND 6 AND 7 + ... + 4 AND 5 AND ... AND 10 = 4 + 4 + ... + 0 = 16.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/xKAPoH2MFN8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kharyusuf","problem_tester":"","date_added":"13-01-2020","tags":{"0":"cook114","1":"kharyusuf"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RGAND","time":{"view_start_date":1579458602,"submit_start_date":1579458602,"visible_start_date":1579458602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RGAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK114/hindi/RGAND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK114/mandarin/RGAND.pdf), [Russian](https://www.codechef.com/download/translated/COOK114/russian/RGAND.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK114/vietnamese/RGAND.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK114/bengali/RGAND.pdf) as well.

You are given positive integers $L$ and $R$. You have to find the sum
$$S = \sum_{i=L}^R \left(L \wedge (L+1) \wedge \ldots \wedge i\right) \,,$$
where $\wedge$ denotes the bitwise AND operation. Since the sum could be large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$ and $R$.

### Output
For each test case, print a single line containing one integer — the sum $S$ modulo $10^9+7$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le L \le R \le 10^{18}$

### Example Input
```
2
1 4
4 10
```

### Example Output
```
1
16
```

### Explanation
**Example case 1:** The sum is 1 + 1 AND 2 + 1 AND 2 AND 3 + 1 AND 2 AND 3 AND 4 = 1 + 0 + 0 + 0 = 1.

**Example case 2:** The sum is 4 + 4 AND 5 + 4 AND 5 AND 6 + 4 AND 5 AND 6 AND 7 + ... + 4 AND 5 AND ... AND 10 = 4 + 4 + ... + 0 = 16.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>