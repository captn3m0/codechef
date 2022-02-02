---
{"category_name":"easy","problem_code":"UPDOTR","problem_name":"Learning Dishes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"dolabmoon","problem_tester":null,"date_added":"19-09-2018","tags":{"0":"binary","1":"cook98","2":"dolabmoon","3":"easy","4":"taran_1407","5":"tree"},"time":{"view_start_date":1537727402,"submit_start_date":1537727402,"visible_start_date":1537727402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/COOK98/bengali/UPDOTR.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/COOK98/mandarin/UPDOTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK98/vietnamese/UPDOTR.pdf) as well.

In Chefland, there are $N$ cities (numbered $1$ through $N$) connected by $N-1$ bidirectional roads in such a way that it is possible to reach any city from any other city. Each city has its own traditional dish for which it is famous; let's denote the tastiness of the dish in city $i$ by $A_i$.

Chef is currently learning how to prepare tastier dishes. At any point, he can only remember how to cook one dish. Initially, the tastiness of the dish he can cook is $W$. Chef is going to travel from city $1$ to city $v$. In each city he visits (including $1$ and $v$), if the tastiness of the traditional dish of this city is strictly greater than the tastiness of the dish he can currently cook, then he forgets the dish he can currently cook and learns the traditional dish of this city.

Now, Chef is wondering how many times he is going to learn a new dish during his trip. You should answer $Q$ independent queries. In each query, you are given the initial tastiness $W$ and Chef's final destination $v$; compute the number of times Chef learns a new dish. Note that the input is given in a special format, so you have to answer the queries online.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains one integer $N$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- The third line contains $N-1$ space-separated integers $P_2, P_3, \dots, P_N$, meaning there's an edge between $i$ and $P_i$.
- The fourth line contains one integer $Q$. 
- Each of the following $Q$ lines contains two space-separated integers $A$ and $B$ describing a query in the following format:
    - Let's denote the answer to the previous query by $Pr$ ($Pr=0$ if this is the first query).
    - For this query, $v = A \oplus Pr$ and $W = B \oplus Pr$.

### Output
For each query, print a single line containing one integer — the number of times Chef learns a new dish.

### Constraints 
- $1 \le T \le 1000$
- $2 \le N \le 10^6$
- $1 \le Q \le 10^6$
- $1 \le A_i \le 10^8$ for each valid $i$
- $1 \le P_i \le i-1$ for each valid $i$
- $1 \le W \le 10^8$
- $1 \le v \le N$
- the sum of $N$ for all test cases does not exceed $10^6$
- the sum of $Q$ for all test cases does not exceed $10^6$

### Example Input
```
1
5
2 3 1 4 5
1 2 2 3
2
2 1
1 0
```

### Example Output
```
2
1
```
