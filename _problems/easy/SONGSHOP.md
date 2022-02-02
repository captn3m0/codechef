---
{"category_name":"easy","problem_code":"SONGSHOP","problem_name":"Music Shopping","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"21-03-2019","tags":{"0":"cook104","1":"dynamic","2":"easy","3":"erfaniaa"},"editorial_url":"https://discuss.codechef.com/problems/SONGSHOP","time":{"view_start_date":1553452200,"submit_start_date":1553452200,"visible_start_date":1553452200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK104/hindi/SONGSHOP.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK104/mandarin/SONGSHOP.pdf), [Russian](http://www.codechef.com/download/translated/COOK104/russian/SONGSHOP.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK104/vietnamese/SONGSHOP.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK104/bengali/SONGSHOP.pdf) as well.

As everybody knows, Reza Shiri is the favourite Iranian artist. Since we love Reza Shiri and his songs, we never download them for free. Reza Shiri’s songs must be purchased from authorised stores. However, what if there is not enough money to buy all the songs?

There are $N$ songs (numbered $1$ through $N$) and $M$ albums (numbered $1$ through $M$) available. For each valid $i$, the $i$-th song has *greatness* $v_i$, price $p_i$ and belongs to the album $a_i$. For each valid $i$, the $i$-th album has price $b_i$. If we buy an album, then all songs from this album count as bought. It is also possible to buy any songs individually.

Your task is simple ― given the budget $P$ (the amount of money we have), calculate the maximum total greatness of songs we can buy. The total greatness is defined as the sum of greatness values of all distinct songs that are bought (either individually or as part of albums).

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $P$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains three space-separated integers $a_i$, $p_i$ and $v_i$.
- The last line contains $M$ space-separated integers $b_1, b_2, \ldots, b_M$.

### Output
Print a single line containing one integer ― the maximum total greatness of songs we can afford to buy.

### Constraints
- $1 \le N, M, P \le 1,000$
- $1 \le b_i, p_i \le P$ for each valid $i$
- $1 \le v_i \le 10^6$ for each valid $i$
- $1 \le a_i \le M$ for each valid $i$

### Example Input
```
5 2 24
1 7 2
1 5 2
1 4 1
2 9 1
2 13 2
10 15
```

### Example Output
```
7
```
