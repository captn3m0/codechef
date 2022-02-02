---
category_name: medium
problem_code: MAFIASYN
problem_name: 'Mafia Syndicate'
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
problem_author: bk2dcradle
problem_tester: null
date_added: 10-12-2018
tags:
    - bk2dcradle
time:
    view_start_date: 1544985000
    submit_start_date: 1544985000
    visible_start_date: 1544985000
    end_date: 1735669800
    current: 1559472975
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.There is a tree with $N$ nodes, numbered from 1 to $N$. The tree is rooted at node 1. The tree represents the structure of a big mafia syndicate, and each node represents a criminal. Each criminal, except the leader (who is denoted by node 1), is under the supervision of his boss, who is his parent in the tree. Initially, each criminal/node except the leader has some money. Starting now, at every second, each criminal will pass on all the money that he has, to his boss (i.e. parent). And during the same second, his 'children' might have passed on some amount to him, which he will pass on to his parent in the next second, and so on. However, a criminal might go rogue if the money he has strictly exceeds some threshold (that is, if the money that he has is greater than a particular value, he is overpowered by greed). Going rogue means, at some point, if the amount of money that he has to pass on to his boss is greater than the threshold, he won't do so, and instead keep the amount to himself. And after this, all the money that comes to him, he will keep to himself. He will not pass on anything after this. So, as an example if there is a tree, 1 - 2 - 3, in which 1 is the root, 2 is beneath 1, and 3 is beneath 2. And suppose the amount of money that each of the criminals initially have is (Note that the root node will not have anything in the beginning): $have\[1\] = 0$ $have\[2\] = 10$ $have\[3\] = 100$ And their thresholds are: $cap\[2\] = 10$ $cap\[3\] = 1000$ That is, if at any second, node 2 has strictly more than 10 amount of money, then he will turn rogue, and will stop passing the money to his boss. Now, at the first second, no criminal has more money than his threshold. So, both criminals 2 and 3 pass on their money to their bosses. Thus, after the first second, the criminals will have the following: $have\[1\] = 10$ $have\[2\] = 100$ $have\[3\] = 0$ But now, since $have\[2\] \\gt cap\[2\]$, criminal 2 turns rogue, and won't pass on any money to his boss anymore. Nothing changes after this, and so this is the stable state. You can show that after some finite amount of time, the configuration remains constant, with no more passing of money. We call this the stable state. The problem is, given the tree with $N$ nodes, and two arrays $have\[2\], have\[3\], \\ldots, have\[N\]$ and $cap\[2\], cap\[3\], \\ldots, cap\[N\]$ of size $N - 1$, find out the total money which the leader (ie. root node) will have at the end, in the stable state. ###Input - The first line contains the integer $N$, denoting the number of criminals/nodes in the syndicate/tree. - The $i^{th}$ of the next $N - 1$ lines contains two space separated integers, $have\[i+1\]$ and $cap\[i+1\]$, which correspond to the amount that criminal $i+1$ initally has, and the threshold beyond which he will turn rogue. Note that $have\[1\]$ is 0 and $cap\[1\]$ is irrelevant, so they are not provided in the input. - The $i^{th}$ of the next $N - 1$ lines contains a single integer, denoting the immediate boss of the $(i+1)^{th}$ criminal. Note that criminal $1$ (i.e. the leader) has no immediate boss, and hence is not included in this input. ###Output Print the total amount present at the root node at the end, in the stable state. ###Constraints - $1 \\le N \\le 10^5$ - $0 \\le have\[i\] \\le cap\[i\] \\le 10^9$ ###Example Input 1 ``` 3 10 10 100 1000 1 2 ``` ###Example Output 2 ``` 10 ``` ###Explanation 1 As explained above, the root will get the money from criminal 2 at the first second, but nothing after that. Hence the answer is 10. ###Example Input 2 ``` 6 10 10 1 2 10 10 1 2 10 10 1 1 2 3 2 ``` ###Example Output 2 ``` 12 ``` ###Explanation 2 In the figures below, the first integer in each node corresponds to its number, and the second integer corresponds to the amount held by that criminal at that moment. The original configuration is !\[Initial\](https://codechef\_shared.s3.amazonaws.com/download/Images/TST18KGP/MAFIASYN/1.png =275x275) During the first second, every criminal (except the leader) passes on the amount that they hold to their boss. So, after the first second, it changes to: !\[After first second\](https://codechef\_shared.s3.amazonaws.com/download/Images/TST18KGP/MAFIASYN/2.png =275x275) During the second second, criminal 2 turns rogue, because 20 &gt; 10. So he stops passing any amount. But criminal 3 doesn't turn rogue, because 1
