---
{"category_name":"medium","problem_code":"CIRCBIN","problem_name":"Bins in a Circle","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"lg5293","problem_tester":null,"date_added":"13-01-2019","tags":{"0":"lg5293"},"time":{"view_start_date":1550311200,"submit_start_date":1550311200,"visible_start_date":1550311200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/SNCKFL19/hindi/CIRCBIN.pdf), [Bengali](http://www.codechef.com/download/translated/SNCKFL19/bengali/CIRCBIN.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL19/mandarin/CIRCBIN.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL19/russian/CIRCBIN.pdf), and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/CIRCBIN.pdf) as well.

Alice and Bob are playing a game. In this game, there are initially $N$ bins in a circle, conveniently labeled $1$ through $N$ in clockwise order — for each valid $i$, bin $i+1$ is the next bin clockwise from bin $i$, and bin $1$ is the next bin clockwise from bin $N$. Also, there is a ball in bin $1$.

The game is played with fixed parametres $R$ and $K$. Initially, the players designate one of the bins as a *special bin*. Then, they alternate turns; Alice plays first. The turns are numbered starting from $1$. In each turn, the following happens:
- The current player must choose an integer $s$ between $1$ and $K$ (inclusive) and move the ball $s$ steps clockwise, i.e. move it to the next bin clockwise (that has not been removed yet) $s$ times.
- Then, if the number of the current turn is not divisible by $R$, nothing happens. Otherwise, let's denote the bin that currently contains the ball by $b$. The current player must remove bin $b$ from the circle.
- If the removed bin is the special bin, the current player wins the game.
- Otherwise (only if the number of the current turn is divisible by $R$), the ball is placed in the next bin clockwise from bin $b$ that has not been removed yet.

It is clear that the game is finite and always has a winner. For each choice of the special bin, determine the winner of the game.

### Input
The first and only line of the input contains three space-separated integers $N$, $K$ and $R$.

### Output
Print a single line containing a string with length $N$. For each valid $i$, the $i$-th character of this string should be 'A' if Alice wins or 'B' if Bob wins when bin $i$ is special.

### Constraints
- $1 \le K \le N \le 10,000$
- $1 \le R \le 10^9 - 1$
- $R$ is odd

### Example Input 1
```
5 1 1
```

### Example Output 1
```
AAABB
```

### Explanation
The players have no choice. Each player can only move the ball one step clockwise, remove the bin to which the ball was moved and move the ball one step clockwise again. Specifically:
- Alice moves the ball from bin $1$ to bin $2$, takes bin $2$ and places the ball in bin $3$.
- Bob moves the ball from bin $3$ to bin $4$, takes bin $4$ and places the ball in bin $5$.
- Alice moves the ball from bin $5$ to bin $1$, takes bin $1$ and places the ball in bin $3$.
- Bob moves the ball from bin $3$ to bin $5$, takes bin $5$ and places the ball in bin $3$.
- Alice moves the ball from bin $3$ to bin $3$ and takes bin $3$. At this point, there are no more bins, so the game must stop.

The game may stop earlier during this process (when the current player takes the special bin), but we can see that bins $1$, $2$ and $3$ are always taken by Alice and bins $4$, $5$ are always taken by Bob.

### Example Input 2
```
5 5 1
```

### Example Output 2
```
AAAAA
```

### Explanation
In her first turn, Alice can move the ball from $1$ to $5$ steps clockwise. No matter which bin is special, she can choose to move the ball to that bin and win immediately.

### Example Input 3
```
52 13 37
```

### Example Output 3
```
AAAAAAAAAAAAAAAAAAAAABBBBBBBBBAAAAAAAAAAAAAAAAAAAAAA
```
