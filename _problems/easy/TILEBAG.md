---
{"category_name":"easy","problem_code":"TILEBAG","problem_name":"Bag of Tiles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"21-12-2018","tags":{"0":"wittyceaser"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Kajaria has an empty bag and 2 types of tiles - 
tiles of type $1$ have the number $X$ written and those of type $2$ have the number $Y$ written on them. He has an infinite supply of both type of tiles.

In one move, Kajaria adds exactly $1$ tile to the bag. He adds a tile of type $1$ with probability $p$ and a tile of type $2$ with probability $(1 - p)$.

If $2$ tiles in the bag have the same number written on them (say $Z$), they are merged into a single tile of twice that number ($2Z$).
Find the expected number of moves to reach the first tile with number $S$ written on it.

**Notes on merging**: 
- Consider that the bag contains tiles $(5, 10, 20, 40)$ and if the new tile added is $5$, then it would merge with the existing $5$ and the bag would now contain $(10, 10, 20, 40)$. The tiles $10$ (already present) and $10$ (newly formed) would then merge in the same move to form $(20, 20, 40)$, and that will form $(40, 40)$, which will form $(80)$.

Kajaria guarantees that:
- $X$ and $Y$ are not divisible by each other.
- A tile with number $S$ can be formed.

###Input
- First line contains a single integer $T$ - the total no. of testcases
- Each testcase is described by $2$ lines:
1. $X, Y, S$ - $3$ space-separated natural numbers
2. $u, v$ - $2$ space-separated natural numbers describing the probability $p$
The value of $p$ is provided as a fraction in its lowest form $u/v$ ($u$ and $v$ are co-prime)

###Output
- For each testcase, if the expected number of moves can be expressed as a fraction $p/q$ in its lowest form, print $(p * q^{-1})$ modulo $10^9 + 7$, where $q^{-1}$ denotes the modular inverse of $q$ wrt $10^9 + 7$.

###Constraints
- $1 \leq T \leq 10^5$
- $2 \leq X, Y \leq 5 * 10^{17}$
- $1 \leq S \leq 10^{18}$
- $1 \leq u < v \leq 10^{9}$

###Sample Input
```
1
5 3 96
1 3
```

###Sample Output
```
48
```