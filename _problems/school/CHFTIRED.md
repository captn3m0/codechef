---
{"category_name":"school","problem_code":"CHFTIRED","problem_name":"Chef and Difficult Contests","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"30-10-2018","tags":{"0":"cakewalk","1":"math","2":"mgch","3":"nov18","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHFTIRED","time":{"view_start_date":1542015002,"submit_start_date":1542015002,"visible_start_date":1542015002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/NOV18/hindi/CHFTIRED.pdf) , [Vietnamese](http://www.codechef.com/download/translated/NOV18/vietnamese/CHFTIRED.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/NOV18/mandarin/CHFTIRED.pdf) , [Russian](http://www.codechef.com/download/translated/NOV18/russian/CHFTIRED.pdf) and [Bengali](http://www.codechef.com/download/translated/NOV18/bengali/CHFTIRED.pdf) as well.

Oh, these difficult contests... In each contest, there are so many hard tasks Chef cannot solve. However, he knows that he can only become a successful coder if he works hard. Fortunately, he has a problem in mind for training.

You are given two positive integers $a$ and $b$. You may apply the following magical operation any number of times (including zero):
- choose an arbitrary **positive** integer $d$
- perform exactly one of the following actions:
    - add $d$ to $a$, add $d-1$ to $b$
    - add $d-1$ to $a$, add $d$ to $b$

Chef is asking you to find out if it is possible to obtain $a = b$. Help him!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $a$ and $b$. 

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to obtain $a = b$ or `"NO"` if it is impossible.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le a, b \le 10^9$

### Subtasks
**Subtaks #1 (100 points):** original constraints

### Example Input
```
1
5 7
```

### Example Output
```
YES
```

### Explanation
**Example case 1:** One possible strategy for Chef is:
- choose $d = 10$, add $d-1=9$ to $a$ and $d=10$ to $b$; after this operation, $a = 14$ and $b = 17$
- choose $d = 10$, add $d=10$ to $a$ and $d-1=9$ to $b$; afterwards, $a = 24$ and $b = 26$
- choose $d = 9$, add $d=9$ to $a$ and $d-1=8$ to $b$; afterwards, $a = 33$ and $b = 34$
- choose $d = 9$, add $d$ to $a$ and $d-1$ to $b$; finally, we have $a = b = 42$
