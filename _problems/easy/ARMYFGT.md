---
category_name: easy
problem_code: ARMYFGT
problem_name: 'Fighting Armies'
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
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: bipin2
problem_tester: null
date_added: 20-12-2018
tags:
    - bipin2
time:
    view_start_date: 1546074900
    submit_start_date: 1546074900
    visible_start_date: 1546074900
    end_date: 1735669800
    current: 1559472934
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Civil war is brewing in the kingdom of NaturalLand again, and this time, the rebels have adopted guerilla warfare. There are $N$ rebel soldiers and they are represented by the numbers $Rebel\_1, Rebel\_2, \\ldots, Rebel\_N$. The king has deployed his soldiers in a long defensive wall, and this is represented by two integers: $lower$ and $upper$. This means that the King's army contains ($upper$ - $lower$ +1) soldiers represented by all the numbers between $lower$ and $upper$ (end points inclusive). The rebels pick individual soldiers from the King's army and ambush them one by one. A soldier $x$ in the King's army will be defeated only if all the $N$ numbers $Rebel\_1, Rebel\_2, \\ldots,$ and $Rebel\_N$ divide $x$ without leaving a remainder. Else, $x$ will survive. Your job is to count the number of soldiers in the King's army who will survive at the end, ###Input: - First line will contain $T$, the number of test cases. Then the test cases follow. - The first line of each test case will contain $N$, representing the number of soldiers in the rebel army. - The second line of each testcase contains $N$ spaced integers: $Rebel\_1, Rebel\_2, \\ldots, Rebel\_N$. - The third line of each testcase contains the 2 integers representing the range $\[lower, upper\]$ of the King's army. ###Output: For each test case, output the answer in a single line. ###Constraints - $1 \\leq T \\leq 1000$ - $1 \\leq N \\leq 500$ - $1 \\leq Rebel\_i \\leq 10^9$ - $1 \\leq lower \\leq upper \\leq 10^{18}$ ###Sample Input: ``` 1 2 2 4 4 8 ``` ###Sample Output: ``` 3 ``` ###EXPLANATION: The rebels' army contains the soldiers {$2,4$}. The King's army contains the soldiers {$4,5,6,7,8$}. The rebels will be able to kill {$4,8$} in the King's army as all the members of rebel army can divide {$4,8$} without leaving a remainder. The other three soldiers, {$5,6,7$} will survive, and hence the answer is 3.
