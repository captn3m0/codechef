---
{"category_name":"easy","problem_code":"CATSRATS","problem_name":"Cats and Rats","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"16-03-2019","tags":{"0":"cook104","1":"easy","2":"erfaniaa"},"editorial_url":"https://discuss.codechef.com/problems/CATSRATS","time":{"view_start_date":1553452200,"submit_start_date":1553452200,"visible_start_date":1553452200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Vietnamese](http://www.codechef.com/download/translated/COOK104/vietnamese/CATSRATS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK104/mandarin/CATSRATS.pdf)
and [Bengali](http://www.codechef.com/download/translated/COOK104/bengali/CATSRATS.pdf) as well.

There are $N$ cats (numbered $1$ through $N$) and $M$ rats (numbered $1$ through $M$) on a line. Each cat and each rat wants to move from some point to some (possibly the same) point on this line. Naturally, the cats also want to eat the rats when they get a chance. Both the cats and the rats can only move with constant speed $1$.

For each valid $i$, the $i$-th cat is initially sleeping at a point $a_i$. At a time $s_i$, this cat wakes up and starts moving to a final point $b_i$ with constant velocity and without any detours (so it arrives at this point at the time $e_i = s_i + |a_i-b_i|$). After it arrives at the point $b_i$, it falls asleep again.

For each valid $i$, the $i$-th rat is initially hiding at a point $c_i$. At a time $r_i$, this rat stops hiding and starts moving to a final point $d_i$ in the same way as the cats ― with constant velocity and without any detours, arriving at the time $q_i = r_i + |c_i-d_i|$ (if it does not get eaten). After it arrives at the point $d_i$, it hides again.

If a cat and a rat meet each other (they are located at the same point at the same time), the cat eats the rat, the rat disappears and cannot be eaten by any other cat. A sleeping cat cannot eat a rat and a hidden rat cannot be eaten ― formally, cat $i$ can eat rat $j$ only if they meet at a time $t$ satisfying $s_i \le t \le e_i$ and $r_j \le t \le q_j$.

Your task is to find out which rats get eaten by which cats. It is guaranteed that no two cats will meet a rat at the same time.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains three space-separated integers $a_i$, $b_i$ and $s_i$.
- $M$ more lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains three space-separated integers $c_i$, $d_i$ and $r_i$.

### Output
For each test case, print $M$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer ― the number of the cat that will eat the $i$-th rat, or $-1$ if no cat will eat this rat.

### Constraints
- $1 \le T \le 10$
- $0 \le N \le 1,000$
- $1 \le M \le 1,000$
- $1 \le a_i, b_i, s_i \le 10^9$ for each valid $i$
- $1 \le c_i, d_i, r_i \le 10^9$ for each valid $i$
- all initial and final positions of all cats and rats are pairwise distinct

### Example Input
```
2
8 7
2 5 1
1 4 1
9 14 10
20 7 9
102 99 1
199 202 1
302 299 3
399 402 3
6 3 1
10 15 10
100 101 1
201 200 1
300 301 5
401 400 5
1000 1010 1020
8 8
2 8 2
12 18 2
22 28 4
32 38 4
48 42 2
58 52 3
68 62 1
78 72 3
3 6 3
13 19 3
21 25 3
31 39 3
46 43 4
59 53 2
65 61 4
79 71 2
```

### Example Output
```
1
4
5
6
7
8
-1
1
2
3
4
5
6
7
8
```
