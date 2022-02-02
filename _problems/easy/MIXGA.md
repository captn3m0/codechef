---
{"category_name":"easy","problem_code":"MIXGA","problem_name":"Mixi Game","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"12-08-2018","tags":{"0":"allllekssssa","1":"cook","2":"cook97","3":"game","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/MIXGA","time":{"view_start_date":1534703400,"submit_start_date":1534703400,"visible_start_date":1534703400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a <a href="http://www.codechef.com/download/translated/COOK97/mandarin/MIXGA.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/COOK97/russian/MIXGA.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK97/vietnamese/MIXGA.pdf" target="_blank">Vietnamese</a> as well.</h3>

Vanja and Miksi have already finished everything for this year at their university, so they decided to spend their free time playing a game with a *binary* sequence $A_1, A_2, \dots, A_N$ (i.e. a sequence containing only integers $0$ and $1$).

At the beginning of the game, Vanja and Miksi write down the expression $* A_1 * A_2 * A_3 * \ldots * A_N$ (note below that each $*$ is a placeholder and does not denote multiplication).

The players take turns alternately, starting with Vanja. The game lasts $N$ turns. In each turn, the current player must replace the first (leftmost) remaining $*$ by the sign $+$ or $-$ (or, equivalently, by the operation of addition or subtraction).

After the last turn, the boys calculate the resulting value $V$ of the expression. If $|V| \ge K$, the winner is Vanja; otherwise, the winner is Miksi.

Please predict the winner of the game if both players play optimally. 

### Input 
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — $1$ if Vanja (the first player) is the winner or $2$ if Miksi (the second player) is the winner.

### Constraints
- $1 \le T \le 50$
- $1 \le N \le 3 \cdot 10^4$
- $0 \le K \le 3 \cdot 10^4$
- $0 \le A_i \le 1$ for each valid $i$

### Example Input
```
2
2 1
1 0
3 5
0 1 0
```

### Example Output
```
1
2
```

### Explanation
**Example case 1:** $K = 1$, so if Vanja replaces the first $*$ by $+$, the value of the final expression will be $V = 1$; then, $K \le |V|$, so the winner is Vanja.

**Example case 2:** $K = 5$, but the absolute value of the final expression cannot be greater than $1$. The winner is Miksi.
