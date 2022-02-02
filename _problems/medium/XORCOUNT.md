---
{"category_name":"medium","problem_code":"XORCOUNT","problem_name":"Xor Counting","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/uwVCqapaRbU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"nishant403","problem_tester":"","date_added":"8-04-2020","tags":{"0":"combinatorics","1":"cook124","2":"dynamic","3":"medium","4":"nishant403"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/XORCOUNT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XORCOUNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK124/hindi/XORCOUNT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK124/mandarin/XORCOUNT.pdf), [Russian](https://www.codechef.com/download/translated/COOK124/russian/XORCOUNT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK124/vietnamese/XORCOUNT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK124/bengali/XORCOUNT.pdf) as well.

Find the number of sequences with $K$ elements which satisfy the following conditions:
- Each element is an integer between $L$ and $R$ inclusive.
- The bitwise XOR of all elements is between $A$ and $B$ inclusive.
  
Since the number of sequences satisfying the given conditions can be quite large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains five space-separated integers $L$, $R$, $A$, $B$ and $K$.

### Output
For each test case, print a single line containing one integer — the number of valid sequences modulo $998,244,353$.

### Constraints
- $1 \le T \le 10$
- $0 \le L \le R \lt 2^{60}$
- $0 \le A \le B \lt 2^{60}$
- $1 \le K \le 50$

### Example Input
```
3
26 54 18 34 1
3 5 4 7 2
2 9 0 100 3
```

### Example Output
```
9
4
512
```

###EXPLANATION:
In the first testcase, we have to choose one integer in $[26, 54] \cap [18, 34] = [26, 34]$. So, there are 9 ways.

In the second testcase, we have to choose two integers in $[3, 5]$ with bitwise xor in $[4, 7]$. There are 4 possible ways:
- $3 \oplus 4= 7$
- $3 \oplus 5 = 6$
- $4 \oplus 3 = 7$
- $5 \oplus 3 = 6$.

In the third testcase all $8^3$ possible sequences are valid, hence the answer is $512$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>