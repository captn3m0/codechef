---
{"category_name":"medium","problem_code":"PLIND","problem_name":"Almost Palindromic","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n1 10\r\n1 100\r\n1 2020\r\n123456789 1000000000","output":"9\r\n19\r\n300\r\n40137232","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"25-12-2019","tags":{"0":"chemthan","1":"cook114"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PLIND","time":{"view_start_date":1579458602,"submit_start_date":1579458602,"visible_start_date":1579458602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PLIND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK114/hindi/PLIND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK114/mandarin/PLIND.pdf), [Russian](https://www.codechef.com/download/translated/COOK114/russian/PLIND.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK114/vietnamese/PLIND.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK114/bengali/PLIND.pdf) as well.

A string is *almost palindromic* if we can rearrange its characters in such a way that it becomes a palindrome. A positive integer is almost palindromic if its decimal representation without leading zeros is an almost palindromic string.

You are given two integers $L$ and $R$. Find the number of almost palindromic integers between $L$ and $R$ (inclusive). Since this number could be very large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$ and $R$ (without leading zeros).

### Output
For each test case, print a single line containing one integer — the number of almost palindromic integers modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 100$
- $1 \le L \le R \lt 10^{10^6}$
- the sum of lengths of $R$ over all test cases does not exceed $10^6$

### Example Input
```
4
1 10
1 100
1 2020
123456789 1000000000
```

### Example Output
```
9
19
300
40137232
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>