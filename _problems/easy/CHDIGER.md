---
{"category_name":"easy","problem_code":"CHDIGER","problem_name":"Chef and a Beautiful Digit","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aleex","problem_tester":null,"date_added":"24-02-2019","tags":{"0":"aleex","1":"implementation","2":"march19","3":"maths","4":"simple","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHDIGER","time":{"view_start_date":1552469402,"submit_start_date":1552469402,"visible_start_date":1552469402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAR19TST/hindi/CHDIGER.pdf), [Bengali](http://www.codechef.com/download/translated/MAR19TST/bengali/CHDIGER.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAR19TST/mandarin/CHDIGER.pdf), [Russian](http://www.codechef.com/download/translated/MAR19TST/russian/CHDIGER.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAR19TST/vietnamese/CHDIGER.pdf) as well.

Chef Leonardo has a decimal integer $N$ and a non-zero decimal digit $d$. $N$ does not contain the digit zero; specifically, $N$ should always be treated as a decimal integer without leading zeroes.

Chef likes $d$ and does not like any other digit, so he decided to change $N$. He may apply the following operation any number of times (including zero): append the digit $d$ to the decimal representation of $N$ ($d$ becomes the least significant digit of $N$), then remove one occurrence of one digit from the decimal representation of $N$.

Chef has already changed a lot of numbers and he got bored. Now, he wants to know the smallest possible value of $N$ which can be obtained by performing the operation described above. Can you help him?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $d$.

### Output
For each test case, print a single line containing one integer - the minimum number Chef can obtain.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^{18}$
- $N$ does not contain the digit $0$
- $1 \le d \le 9$

### Subtasks
**Subtask #1 (40 points):**
- $1 \le T \le 100$
- $1 \le N \le 10^9$

**Subtask #2 (60 points):** original constraints

### Example Input
```
3
35 4
42 4
24 9
```

### Example Output
```
34
24
24
```
	
### Explanation
**Example case 1:** Chef can remove the digit $5$ and add $4$ to the end of $N$. Then, $N$ becomes $34$.

**Example case 2:** Chef can remove the digit $4$ from the beginning of $N$, add $4$ to the end of $N$ and get $N = 24$.

**Example case 3:** Chef cannot make his number any smaller.
