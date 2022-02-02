---
{"category_name":"medium","problem_code":"SNOWMAN","problem_name":"Do You Want to Build a Snowman","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"20-12-2018","tags":{"0":"admin3"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>On a snowy afternoon, your friend Ajay came to your house with a large pile of snowballs. You both were bored and it was freezing outside. So, you two decided to play a game. Suppose, initially there are $n$ snowballs in the pile. You get the first turn and take at least one snowball from the pile if it is possible by rules. Then Ajay has his turn to also take some snowballs. However, there are some rules you both agreed on:

- Two players take their turns alternately.
- In the very first turn (first turn of first player), a player cannot empty the pile.
- A player must take at least one snowball and he cannot take more than two times what his opponent took in his last turn.
- The player who can empty the pile wins the game.

If you can win the game, you get all the snowballs and build a beautiful snowman. Can you do that? Remember, your friend Ajay is very clever and will play optimally.

###Input
- The input consists of multiple problem instances. 
- For each instance, there is an integer $n$ in a separate line representing the number of snowballs in the pile. 
- 0 determines the end of input. 
- There will be maximum 1000 instances to solve. 
- For any instance, $0 < n < 10^{10}$

###Output
For each instance, output either of the following in a single line:
- “L” if you cannot win the game provided that your friend follows the best strategy. 
- The number of snowballs you will take from the pile in the very first turn if there is a winning strategy.  If there are multiple answers, output the smallest answer.
- “D” If nobody can win.

###Sample Input
```
3
5
15
27
0 
```

###Sample Output
```
L
L 
2 
1
```