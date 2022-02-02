---
{"category_name":"medium","problem_code":"GDIST","problem_name":"Grammar Distance","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"16-09-2018","tags":{"0":"bciobanu","1":"context","2":"cyk","3":"dynamic","4":"medium","5":"snckel19","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/GDIST","time":{"view_start_date":1544295600,"submit_start_date":1544295600,"visible_start_date":1544295600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19ELTST/hindi/GDIST.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/S19ELTST/mandarin/GDIST.pdf), [Russian](http://www.codechef.com/download/translated/S19ELTST/russian/GDIST.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19ELTST/vietnamese/GDIST.pdf) and [Bengali](http://www.codechef.com/download/translated/S19ELTST/bengali/GDIST.pdf) as well.

You are given a <a href="https://en.wikipedia.org/wiki/Context-free_grammar#Formal_definitions">context free grammar</a> $G$ and a string $S$. Find the minimum Levenshtein distance between $S$ and any string $W$ accepted by $G$.

### Input
- The first line of the input contains two space-separated integers $V$ and $R$ denoting the number of *non-terminals* and the number of *productions* of $G$ respectively.
- The following $R$ lines describe productions.
    - Each line starts with an integer $T$ denoting the production type.
    - If $T = 0$, a space and three space-separated integers $X$, $Y$ and $Z$ denoting a production $X \rightarrow YZ$ follow.
    - If $T = 1$, a space, an integer $X$, another space and a character $c$ denoting a production $X \rightarrow c$ follow.
    - If $T = 2$, a space and a single integer $X$ denoting a production $X \rightarrow \varepsilon$ follows.
- The next line contains a single integer $ST$ denoting the starting symbol of $G$.
- Last line contains the string $S$ as explained in statement.

### Output
Print a single line containing one integer — the minimum distance. It is guaranteed that the minimum distance fits in a 64-bit signed integer.

### Constraints 
- $1 \le V \le 60$
- $1 \le |S| \le 60$
- $1 \le R \le 256$ 
- $0 \le X, Y, Z \le V - 1$
- $c$ is an English letter or a decimal digit
- $S$ consist of english letters or decimal digit or both.

### Example Input
```
5 7
0 0 1 2
0 0 3 4
2 0
1 1 a
1 3 b
0 4 0 3
0 2 0 1
0 
ababb
```

### Example Output
```
2
```

### Explanation
The grammar recognizes all even-length palindromes over the alphabet $\{a, b\}$. We can transform the given string into "abaaba" with one insertion and one substitution. 
