---
{"category_name":"medium","problem_code":"MKSTR","problem_name":"Make a String","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":null,"date_added":"25-07-2018","tags":{"0":"dynamic","1":"fekete","2":"fekete","3":"likecs","4":"ltime62","5":"medium","6":"string","7":"tries"},"editorial_url":"https://discuss.codechef.com/problems/MKSTR","time":{"view_start_date":1532797200,"submit_start_date":1532797200,"visible_start_date":1532797200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/LTIME62/hindi/MKSTR.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/LTIME62/mandarin/MKSTR.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME62/russian/MKSTR.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME62/vietnamese/MKSTR.pdf" target="_blank">Vietnamese</a> as well.</h3>


You have an initially empty string $S$, a target string $T$ and a sequence of $n$ strings $p_1, p_2, \dots, p_n$. You may perform any number of operations; let's denote by $|S|$ the length of the string $S$ before the current operation. Each operation should be of one of the following types:
- insert a lowercase English letter $x$ at the beginning of the string $S$; the cost of this operation is $cl_x \cdot |S|$
- append a lowercase English letter $x$ to the end of $S$ with cost $cr_x \cdot |S|$
- choose a valid index $i$ and insert the string $p_i$ at the beginning of $S$ with cost $kl_i \cdot |S|$
- choose a valid index $i$ and append the string $p_i$ to the end of $S$ with cost $kr_i \cdot |S|$

Note that in the first two types of operations, $x$ refers to any English lower case letter. Not just the letter 'x'.

Your task is to calculate the minimum total cost of building the target string $T$, i.e. the minimum sum of costs of operations needed to make $S$ equal to $T$.

### Input
- The first line of the input contains a single integer $n$.
- $n$ lines follow. For each valid $i$, the $i$-th of these lines contains the string $p_i$.
- The next line contains $26$ space-separated integers $cl_a, cl_b, \dots, cl_z$.
- The next line contains $26$ space-separated integers $cr_a, cr_b, \dots, cr_z$.
- The next line contains $n$ space-separated integers $kl_1, kl_2, \dots, kl_n$.
- The next line contains $n$ space-separated integers $kr_1, kr_2, \dots, kr_n$.
- The last line contains a single string $T$.

### Output
Print a single line containing one integer — the minimum cost of building the target string.

### Constraints 
- $1 \le n \le 10^4$
- $1 \le |p_i| \le 100$ for each valid $i$
- $1 \le |T| \le 1,000$
- $1 \le cl_i, cr_i \le 10^9$ for each lowercase English letter $i$
- $1 \le kl_i, kr_i \le 10^9$ for each valid $i$
- all strings contain only lowercase English letters

### Subtasks
**Subtask #1 (30 points):**
- $n \le 10$
- $|p_i| \le 10$ for each valid $i$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
aba
ba
xy
1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26
3 2 1 3 5 9 10 11 11 9 9 8 7 6 5 1 33 22 11 90 1 1 2 3 5 8
1 2 3
1 1 1
abacaba
```

### Example Output
```
5
```

### Explanation
First of all, we should perform an operation of the first or second type and add the letter "c" to the initial empty string $S$, with cost $0$ because $|S|=0$ currently. Next, we should perform an operation of the third type, inserting the string "aba" at the beginning of $S$ with cost $1 \cdot 1 = 1$ (since $|S|=1$ currently); after this operation, $S$ is "abac". Finally, we should perform an operation of the fourth type, appending the string "aba" to $S$ with cost $1 \cdot 4 = 4$ (since $|S|=4$ currently). After this operation, $S=T$, so the total cost is $0 + 4 + 1 = 5$.
