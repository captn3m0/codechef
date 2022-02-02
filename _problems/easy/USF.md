---
{"category_name":"easy","problem_code":"USF","problem_name":"Useful Number","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nots0fast","problem_tester":null,"date_added":"21-11-2018","tags":{"0":"easy","1":"ltime66","2":"nots0fast","3":"sieve"},"editorial_url":"https://discuss.codechef.com/problems/USF","time":{"view_start_date":1543078801,"submit_start_date":1543078801,"visible_start_date":1543078801,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME66/mandarin/USF.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME66/bengali/USF.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME66/hindi/USF.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME66/russian/USF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME66/vietnamese/USF.pdf) as well.

You are given an integer sequence $A_1, A_2, \dots, A_N$. Let's define the *useful number* of a subsequence of $A$ as the number of distinct primes $p$ such that $p$ divides each member of the subsequence, multiplied by the length of the subsequence. Find the maximum of useful numbers of all subsequences of $A$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-seperated integers $A_1, A_2, \dots, A_N$.

### Output
Print a single line containing one integer — the maximum useful number.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):**
- $1 \le N \le 15$
- $1 \le A_i \le 100$ for each valid $i$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
5
2 2 4 17 8
```

### Example Output
```
4
```
	
### Explanation
**Example case 1:** The subsequence $[2, 2, 4, 8]$ has the maximum useful number. The number of distinct primes that divide each member of the subsequence is $1$ (only the prime $2$) and the length of the subsequence is $4$, so the useful number of this subsequence is $1\cdot 4 = 4$.
