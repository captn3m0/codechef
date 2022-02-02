---
{"category_name":"medium","problem_code":"XYPRESQ","problem_name":"The Prestige","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"include_sajal","problem_tester":null,"date_added":"5-02-2019","tags":{"0":"include_sajal"},"time":{"view_start_date":1550311200,"submit_start_date":1550311200,"visible_start_date":1550311200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/SNCKFL19/hindi/XYPRESQ.pdf), [Bengali](http://www.codechef.com/download/translated/SNCKFL19/bengali/XYPRESQ.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL19/mandarin/XYPRESQ.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL19/russian/XYPRESQ.pdf), and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/XYPRESQ.pdf) as well.

ChefX and ChefY just watched the eminent movie "The Prestige", so ChefX decided to perform a magic trick.

First, ChefX bought two decks of cards. Each deck contains $N$ cards. The cards in the first deck are numbered $1$ through $N$ from top to bottom, while the cards in the second deck are numbered $N$ through $1$ from top to bottom. Initially, all the cards are oriented face down.

For the magic trick, ChefX chooses two parametres $S$ and $M$. The magic trick is performed in $S$ *steps*.

In each step, ChefX asks ChefY to distribute $M$ *moves* arbitrarily between these two decks. In one move, the topmost card from one deck is moved to the bottom of that deck. Then, ChefX performs the moves in the order chosen by ChefY. For example, if $M = 10$, ChefY could choose the moves in this order:
1. Perform $2$ moves on the first deck.
2. Perform $3$ moves on the second deck.
3. Perform $5$ moves on the first deck. 

At the end of each step, ChefX takes the topmost cards from both decks (one card from each deck) and puts them aside, face down, next to each other. Each deck now contains one card less and the next step is performed with these reduced decks.

At the end, there are $S$ pairs of cards that were put aside and ChefX reveals them to ChefY. The magic trick is *successful* when the cards in each pair have the same numbers.

ChefX has already chosen the parameter $S$. He knows that there are many possible values of $M$ such that the magic trick is always successful regardless of how ChefY distributes the moves in each step, but there are also values of $M$ such that it may be unsuccessful. Therefore, he would like to know the minimum possible $M$ such that the magic trick with these parametres $M$ and $S$ is always successful. Can you help ChefX? Since this number may be large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $S$.

### Output
For each test case, print a single line containing one integer — the minimum value of $M$ such that the magic trick is always successful.

### Constraints
- $1 \le T \le 3 \cdot 10^4$ 
- $2 \le N \le 10^6$ 
- $1 \le S \lt N$

### Input
```
1 
3 1
```

### Output
```
2
```

### Explanation
The magic trick consists of only one step.

Initially, the decks contain cards $(1,2,3)$ and $(3,2,1)$. The minimum $M$ is $2$. For this $M$, both moves in the only step can be performed on the second deck. Afterwards, it contains cards $(1,3,2)$. In each deck, the topmost card is now card number $1$; ChefX takes those cards and since they have the same numbers, the magic trick is successful.
