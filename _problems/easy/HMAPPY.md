---
{"category_name":"easy","problem_code":"HMAPPY","problem_name":"Appy and Balloons ","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hmrockstar","problem_tester":null,"date_added":"11-09-2018","tags":{"0":"binary","1":"easy","2":"hmrockstar","3":"oct18"},"editorial_url":"https://discuss.codechef.com/problems/HMAPPY","time":{"view_start_date":1540027803,"submit_start_date":1540027803,"visible_start_date":1540027803,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/OCT18/hindi/HMAPPY.pdf) ,[Bengali](http://www.codechef.com/download/translated/OCT18/bengali/HMAPPY.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/OCT18/mandarin/HMAPPY.pdf) , [Russian](http://www.codechef.com/download/translated/OCT18/russian/HMAPPY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT18/vietnamese/HMAPPY.pdf) as well.


Appy loves balloons! She wants you to give her balloons on each of $N$ consecutive days (numbered $1$ through $N$); let's denote the number of balloons Appy wants on day $i$ by $A_i$. The problem is that you only have $M$ balloons. Fortunately, you can give her candies instead of balloons as well. On each day $i$, Appy accepts $B_i$ candies per each balloon you do not give her — formally, if you give Appy $X_i$ balloons on day $i$, then you have to give her $C_i = \mathrm{max}(0, A_i - X_i) \cdot B_i$ candies as well.

Your task is to minimize the maximum number of candies you give Appy on some day — find the minimum possible value of $\mathrm{max}(C_1, C_2, C_3, ..., C_N)$.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \dots, B_N$.

### Output
Print a single line containing one integer — the minimum value of $\mathrm{max}(C_1, C_2, C_3, ..., C_N)$.

### Constraints 
- $1 \le N \le 10^5$
- $0 \le M \le 10^{18}$
- $0 \le A_i \le 10^{9}$ for each valid $i$
- $0 \le B_i \le 10^{9}$ for each valid $i$

### Subtasks
**Subtask #1 (27 points):**
- $1 \le A_i \le 10$ for each valid $i$
- $1 \le B_i \le 10$ for each valid $i$

**Subtask #2 (73 points):** original constraints

### Example Input
```
5 3 
1 2 3 4 5
1 2 3 4 5
```

### Example Output
```
15
```

### Explanation
If you give Appy $0, 0, 0, 1, 2$ balloons on days $1$ through $5$, then the required numbers of candies on each day are $1, 4, 9, 12, 15$. The maximum number of candies is $15$, required on day $5$.
