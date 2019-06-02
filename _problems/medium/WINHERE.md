---
category_name: medium
problem_code: WINHERE
problem_name: 'Winter Is Here'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - PYP3
    - CLOJ
    - R
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: aashu_k
problem_tester: null
date_added: 31-03-2019
tags:
    - aashu_k
time:
    view_start_date: 1554669000
    submit_start_date: 1554669000
    visible_start_date: 1554669000
    end_date: 1735669800
    current: 1559472986
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\*\*Winter is here\*\* and so are the white walkers. The war against white walker is going on a 2-D plane. Jon Snow, the heir to the Iron Throne is standing at $(0,0)$ on the plane. $N$ white walkers are coming towards the wall to attack the night's watch. Currently each white walker is at a fixed point $(x\_i, y\_i)$ on the 2-D plane. Horizontal distance between two points $(x\_1,y\_1)$ and $(x\_2,y\_2)$ is $|x\_1-x\_2|$, and vertical distance between them is $|y\_1-y\_2|$. There are $Q$ queries to answer. Each query is of the form $L \\, R \\, K$. $(1 \\leq L \\leq R \\leq N) $ For each query, only white walkers in the range $\[L,R\]$ have to be considered. \*\*Active\*\* white walkers in this range $\[L,R\]$ are only those whose \*\*horizontal distance from Jon is not more than\*\* $K$ \*\*units\*\*. The \*\*POWER\*\* of the \*\*active\*\* white walker army is calculated as the $XOR$ sum of the \*\*number of divisors of the vertical distance of active enemies from Jon.\*\* Jon knows that the active army is of no harm \*\*if their power is 0\*\*. Jon snow has a weapon with which he can kill \*\*exactly one\*\* \*\*\*active\*\*\* white walker, such that killing him will render the army powerless. Can you help Jon to find out for each query \*\*how many choices does he have to kill exactly one white walker such that the army becomes powerless\*\*? ###Input: - First line contains $N$. The number of white walkers in the army. - Next $N$ lines contains 2 integers - $(x\_i,y\_i)$ each denoting the x and y coordinate of white walkers. - Next line contains an integer $Q$ denoting the number of queries. - Next $Q$ lines contains 3 integers each. $L$, $R$ and $K$. ###Output : - For each query print the number of white walkers Jon can target to make the army powerless. ###Constraints : - $1 \\leq N \\leq 10^5$ - $ 1 \\leq Q \\leq 2\*10^5$ - $1 \\leq L \\leq R \\leq N$ - $1 \\leq x\_i,y\_i ,K \\leq 10^9$ ###Sample Input: 4 1 15 2 2 3 2 2 5 2 2 4 5 1 3 2 ###Sample Output: 3 0 ###EXPLANATION: \*\*For query 1\*\* - Active white walkers are at (2,2), (3,2) and (2,5), as these have horizontal distance from Jon $\\leq K$. - Power of the active army is XOR sum of NOD of vertical distance from Jon = NOD(2) xor NOD(2) xor NOD(5), where NOD means Number of divisors. Power = 2 ^ 2 ^ 2 = 2 - Therefore Jon can kill any one of the 3 white walkers. So the power of remaining army will be 2 ^ 2 = 0. \*\*For query 2\*\* - Active white walkers are at (1,15), and (2,2) as these have horizontal distance from Jon $\\leq K$. - Power of the active army is XOR sum of NOD of vertical distance from Jon = NOD(15) xor NOD(2) , where NOD means Number of divisors. Power = 4^2 = 6 - There is no choice here to kill exactly 1 white walker here to render the power = 0 Hence, the answer is 0.
