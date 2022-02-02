---
{"category_name":"school","problem_code":"EID","problem_name":"Chef and Eid","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"23-08-2018","tags":{"0":"greedy","1":"kingofnumbers","2":"ltime63","3":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/EID","time":{"view_start_date":1535216402,"submit_start_date":1535216402,"visible_start_date":1535216402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>
<h3>Read problems statements in <a href="http://www.codechef.com/download/translated/LTIME63/hindi/EID.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/LTIME63/mandarin/EID.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME63/russian/EID.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME63/vietnamese/EID.pdf" target="_blank">Vietnamese</a> as well.</h3>

During Eid, it's a tradition that each father gives his kids money which they can spend on entertainment.

Chef has $N$ coins; let's denote the value of coin $i$ by $v_i$. Since today is Eid, Chef is going to give one coin to each of his two children. He wants the absolute value of the difference between the values of coins given to the two children to be as small as possible, so that he would be as fair as possible. 

Help Chef by telling him the minimum possible difference between the values of the coins given to the two children. Of course, Chef cannot give the same coin to both children.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $v_1, v_2, \dots, v_N$.

### Output
For each test case, print a single line containing one integer — the minimum possible difference.

### Constraints 
- $1 \le T \le 100$
- $2 \le N \le 10^5$
- the sum of $N$ in all test cases does not exceed $5 \cdot 10^5$
- $1 \le v_i \le 10^6$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** the sum of $N$ in all test cases does not exceed $2,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3
1 4 2
3
1 3 3
```

### Example Output
```
1
0
```

### Explanation
**Example case 1:** Chef gives the coin with value $1$ to his first child and the coin with value $2$ to the second child, so the answer is $2-1 = 1$.

**Example case 2:** Chef gives each of his children a coin with value $3$, so the difference is $0$.
