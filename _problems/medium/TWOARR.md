---
{"category_name":"medium","problem_code":"TWOARR","problem_name":"The Most Amazing Dish","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"deva2802","problem_tester":null,"date_added":"14-02-2019","tags":{"0":"cook103","1":"deva2802","2":"medium","3":"persistence"},"editorial_url":"https://discuss.codechef.com/problems/TWOARR","time":{"view_start_date":1550428202,"submit_start_date":1550428202,"visible_start_date":1550428202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK103/hindi/TWOARR.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK103/mandarin/TWOARR.pdf), [Russian](http://www.codechef.com/download/translated/COOK103/russian/TWOARR.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK103/vietnamese/TWOARR.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK103/bengali/TWOARR.pdf) as well.

Chef has recently learnt about the most amazing dish. The recipe for this dish lists two sequences $A_1, A_2, \ldots, A_N$ and $B_1, B_2, \ldots, B_N$, and $Q$ tasks. Chef noticed that there are only three types of tasks:
1. `Z Y`: set $B_Z = Y$
2. `L R X`: for each $i$ such that $L \le i \le R$, set $A_i = B_{X+i-L}$
3. `L R`: compute the sum $A_L + A_{L+1} + \ldots + A_R$

Chef must perform all the tasks in the given order if he wants to master cooking the most amazing dish. He set out to perform all the tasks, but soon realised that there are too many of them! Since Chef does not want to miss his favourite TV show, you should help him perform all the tasks written on the recipe.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.
- The next $Q$ lines describe the tasks. Each of these lines contains an integer $T$ denoting the type of the current task, followed by a space and the parametres of this task in the following format:
    - if $T = 1$, two space-separated integers $Z$ and $Y$
    - if $T = 2$, three space-separated integers $L$, $R$ and $X$
    - if $T = 3$, two space-separated integers $L$ and $R$

### Output
For each task of type 3, print a single line containing one integer — the required sum.

### Constraints 
- $1 \le N \le 2 \cdot 10^5$
- $1 \le Q \le 2 \cdot 10^5$
- $0 \le A_i, B_i \le 10^9$ for each valid $i$
- $0 \le Y \le 10^9$
- $1 \le L \le R \le N$
- $1 \le Z, X \le N$ 
- $X+R-L \le N$

### Example Input
```
5 6
0 0 0 0 0
1 2 3 4 5
2 2 3 1
3 1 5
1 3 2
3 1 5
2 1 5 1
3 1 5
```

### Example Output
```
3
3
14
```

### Explanation
In the second, fourth and sixth task, you should compute the current sum of all elements of $A$.

After performing the first task, $A = [0, 1, 2, 0, 0]$ and $B = [1, 2, 3, 4, 5]$.

After the third task, $A = [0, 1, 2, 0, 0]$ and $B = [1, 2, 2, 4, 5]$.

After the fifth task, $A = [1, 2, 2, 4, 5]$ and $B = [1, 2, 2, 4, 5]$.
