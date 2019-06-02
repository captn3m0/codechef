---
category_name: challenge
problem_code: CHEFXCHG
problem_name: '(Challenge) Chef Exchange'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: null
date_added: 18-04-2019
tags:
    - bciobanu
time:
    view_start_date: 1557739980
    submit_start_date: 1557739980
    visible_start_date: 1557739980
    end_date: 1735669800
    current: 1559472996
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAY19/mandarin/CUREK.pdf), \[Russian\](http://www.codechef.com/download/translated/MAY19/russian/CUREK.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAY19/vietnamese/CUREK.pdf) as well. \*\*This is an interactive problem.\*\* It often happens when going out in larger groups that somebody ends up paying more than his share. Therefore, $N$ imaginative people (numbered $1$ through $N$) decided to share their expenses through a ledger system. It is your task to implement it. This system must listen for payment requests in real time, but it does not have to process them right away. It should also account for $M$ available currencies (numbered $1$ through $M$) and variable exchange rates between them. Currency $1$ is the local currency. It is only possible to buy other currencies using currency $1$ (not, for example, to buy currency $2$ using currency $3$) and it is impossible to buy currency $1$. Initially, the digital wallet of each user contains only $10^9$ units of currency $1$ and all exchange rates are $1$. For each valid $i$, let's denote the exchange rate of currency $i$ by $R\_i$. You should process $Q$ requests of two types: 0. User $a$ ($1 \\le a \\le N$) borrows $K$ units of currency $1$ from user $b$ ($1 \\le b \\le N$, $a \\neq b$), i.e. $a$ owes $b$ additional $K$ units of currency $1$. 1. The exchange rate of currency $c$ ($1 \\le c \\le M$) changes to $X$. After each request, you may perform any number of operations. There are two types of operations: - `SEND a b c K`: Transfer $K$ units of currency $c$ from user $a$ to user $b$ ($0 \\le K$, $1 \\le a, b \\le N$, $1 \\le c \\le M$). This operation fails if $a$ currently owns less than $K$ units of currency $c$, regardless of the amounts of money in other currencies in this user's wallet. - `XCHG a c K`: Buy $K$ units of currency $c$ for user $a$ ($0 \\le K$, $1 \\le a \\le N$, $2 \\le c \\le M$). The amount of money in currency $1$ in the wallet of user $a$ decreases by $R\_c \\cdot K$ and the amount of money in currency $c$ in this wallet increases by $K$. This operation fails if the amount of money in the wallet of user $a$ was smaller than $R\_c \\cdot K$. For each person $i$, let's define a value called the \*balance\* of this user's account (denoted by $B\_i$) describing how much money (in units of currency $1$) this user owes to others or how much he is owed; initially, all balances are $0$. - In each request of type $0$, the balance $B\_a$ decreases by $K$ and the balance $B\_b$ increases by $K$. - In each request of type $1$ and each `XCHG` operation, the balances are unchanged. - In each `SEND` operation, the balance $B\_a$ increases by $K / R\_c$ and the balance $B\_b$ decreases by $K / R\_c$. It is allowed to optimise the money transfers (`SEND` operations). For example, if user $a$ owes user $b$ $10$ units of currency $1$, $d$ owes $b$ $5$ units and $b$ owes $c$ $15$ units, it is enough for users $a$ and $d$ to send $10$ and $5$ units of currency $1$ respectively to user $c$. At the end, all balances must be $0$. Note that the balances do not correspond to the total amount of money (in units of currency $1$) in the digital wallets and it is possible for anyone to have less or more money in the digital wallet than if all money transfers were done in currency $1$. The final contents of the digital wallets do not matter. ### Interaction - First, you should read a line containing three space-separated integers $N$, $M$ and $Q$. - Then, you should process $Q$ requests. For each request, you must do the following: - Read a line describing the request in the format `0 a b K` (user $a$ sends $K$ units of currency $1$ to user $b$) or `1 c X` (currency $c$ is now worth $X$ times currency $1$). - Print a line containing one integer $T$ - the number of operations you want to make immediately after this request (possibly $0$). - Print $T$ lines. Each of these lines should describe an operation in the format `SEND a b c K` or `XCHG a c K`. - Read a line containing a single integer. If this integer is $1$, all operations were completed successfully and you should continue processing the remaining requests. If it is $-1$, you should terminate your program immediately to receive the Wrong Answer verdict. Otherwise, you may receive any verdict. Don't forget to flush the output after printing each line! ### Example ``` Grader You 5 2 3 0 1 2 5 2 XCHG 1 2 300 SEND 1 2 2 5 1 1 2 3 0 1 0 1 2 9 1 SEND 1 2 2 3 1 ``` ### Explanation There are $5$ people, $2$ currencies and $3$ requests. - After the first request, we choose to invest in currency $2$ for user $1$ and then pay their debt using it. At the moment, currency $2$ is worth exactly the same as the local currency. - The second request informs us that the investment was in fact profitable and the value of the money we converted to currency $2$ has tripled. - In the third request, we can just send $3$ units of currency $2$, because those are worth $9$ units of the local currency at this point in time. ### Scoring Let's denote the total amount of money transferred in `SEND` operations (the sum of $K$ in these operations) by $S$. The grader computes $S$ and the \*waiting penalty\* $P$. Initially, $P$ is $0$; after processing each request and performing the chosen operations, the grader adds $\\sum\_{i=1}^N |B\_i|$ to $P$. The score of each test case (and therefore each test file) is $S + \\frac{P}{Q}$. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission. There are twenty test files - four of each type described below. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4/20) of the test files; these tests have types $1$, $2$, $3$ and $5$. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other sixteen test files. ### Test generation Let $\\text{MAX}\_{\\text{MULTIPLY}}$ be the maximum value of $X$ over all requests of type $1$ and $\\text{MAX}\_{\\text{SEND}}$ be the maximum value of $K$ over all requests of type $0$. There are $5$ types of tests:   \# N M Q MAX\_MULTIPLY MAX\_SEND 1100110002012202010001001003201001000100,000100,0004100100100010010051001001000100,000100,000In each test, the requests are generated randomly independently as follows: - If $M \\neq 1$, we choose the request type uniformly randomly between $0$ and $1$. Otherwise, each request has type $0$. - For a request of type $0$, we choose the triple of parameters $(a, b, K)$ uniformly randomly, i.e. each valid triple of parameters has the same probability of being chosen. - For a request of type $1$, we choose $c$ uniformly randomly between $2$ and $M$ inclusive and $X$ uniformly randomly between $1$ and $\\text{MAX}\_{\\text{MULTIPLY}}$ inclusive.
