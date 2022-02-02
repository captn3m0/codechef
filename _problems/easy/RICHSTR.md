---
{"category_name":"easy","problem_code":"RICHSTR","problem_name":"Rich Substrings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n10 2\r\nhelloworld\r\n1 3\r\n1 10","output":"NO\r\nYES","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"16-08-2019","tags":{"0":"cook109","1":"erfaniaa","2":"observation","3":"range","4":"segment","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/RICHSTR","time":{"view_start_date":1566153002,"submit_start_date":1566153002,"visible_start_date":1566153002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RICHSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK109/hindi/RICHSTR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK109/mandarin/RICHSTR.pdf), [Russian](https://www.codechef.com/download/translated/COOK109/russian/RICHSTR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK109/vietnamese/RICHSTR.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK109/bengali/RICHSTR.pdf) as well.

A string with length $L$ is called *rich* if $L \ge 3$ and there is a character which occurs in this string strictly more than $L/2$ times.

You are given a string $S$ and you should answer $Q$ queries on this string. In each query, you are given a substring $S_L, S_{L+1}, \ldots, S_R$. Consider all substrings of this substring. You have to determine whether at least one of them is rich.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains a single string $S$ with length $N$.
- Each of the next $Q$ lines contains two space-separated integers $L$ and $R$ describing a query.

### Output
For each query, print a single line containing the string `"YES"` if the given substring contains a rich substring or `"NO"` if it does not contain any rich substring.

### Constraints 
- $1 \le T \le 10$
- $1 \le N, Q \le 10^5$
- $1 \le L \le R \le N$
- $S$ contains only lowercase English letters

### Example Input
```
1
10 2
helloworld
1 3
1 10
```

### Example Output
```
NO
YES
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>