---
{"category_name":"easy","problem_code":"AGECAL","problem_name":"Age Calculator","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"arpa","problem_tester":null,"date_added":"28-12-2018","tags":{"0":"arpa","1":"implementation","2":"ltime67"},"editorial_url":"https://discuss.codechef.com/problems/AGECAL","time":{"view_start_date":1546103100,"submit_start_date":1546103100,"visible_start_date":1546103100,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTM67TST/mandarin/AGECAL.pdf) , [Bengali](http://www.codechef.com/download/translated/LTM67TST/bengali/AGECAL.pdf) , [Hindi](http://www.codechef.com/download/translated/LTM67TST/hindi/AGECAL.pdf) , [Russian](http://www.codechef.com/download/translated/LTM67TST/russian/AGECAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTM67TST/vietnamese/AGECAL.pdf) as well.

Chef's planet is called Javad. A year on Javad has $N$ months numbered $1$ through $N$. For each valid $i$, the $i$-th month has $a_i$ days numbered $1$ through $a_i$. 

On Javad, years that are divisible by $4$ are leap years - the last month of each leap year is one day longer (it has $a_N + 1$ days).

You are given Chef's birth date and the current date. Find the age of Chef in days, i.e. the number of days between Chef's birth date and the current date inclusive.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- The third line contains three space-separated positive integers $y_b$, $m_b$ and $d_b$ denoting the year, month and day of Chef's birth respectively.
- The fourth line contains three space-separated positive integers $y_c$, $m_c$ and $d_c$ denoting the current year, month and day respectively.

### Output
For each test case, print a single line containing one integer — Chef's age in days.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10,000$
- $1 \le a_i \le 10,000$ for each valid $i$
- $1 \le y_b, y_c \le 100,000$
- $1 \le m_b, m_c \le N$
- $d_b$ will be less than or equal to the days of the $m_b$ month of the $y_b$ year.
- $d_c$ will be less than or equal to the days of the $m_c$ month of the $y_c$ year.
- the current date is equal to or greater than Chef's birth date

### Subtasks
**Subtask #1 (10 points):**
- $1 \le y_b, y_c, N \le 1,000$
- $1 \le a_i \le 100$ for each valid $i$

**Subtask #2 (90 points):** original constraints

### Example Input
```
4
5
1 2 3 4 5
2 1 1
3 5 1
2
3 3
1 1 1
2 2 2
2
1 1
3 1 1
3 2 1
5
1 4 3 4 6
3 5 6
10 1 1
```

### Example Output
```
26
11
2
112
```
