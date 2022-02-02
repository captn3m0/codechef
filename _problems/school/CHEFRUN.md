---
{"category_name":"school","problem_code":"CHEFRUN","problem_name":"Secret Recipe","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hloya_ygrt","problem_tester":null,"date_added":"15-05-2018","tags":{"0":"hloya_ygrt"},"editorial_url":"https://discuss.codechef.com/problems/CHEFRUN","time":{"view_start_date":1526841000,"submit_start_date":1526841000,"visible_start_date":1526841000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK94/mandarin/CHEFRUN.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK94/russian/CHEFRUN.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK94/vietnamese/CHEFRUN.pdf" target="_blank">Vietnamese</a> as well.</h3>


Chef and his competitor Kefa own two restaurants located at a straight road. The position of Chef's restaurant is $X_1$, the position of Kefa's restaurant is $X_2$.

Chef and Kefa found out at the same time that a bottle with a secret recipe is located on the road between their restaurants. The position of the bottle is $X_3$.

The cooks immediately started to run to the bottle. Chef runs with speed $V_1$, Kefa with speed $V_2$.

Your task is to figure out who reaches the bottle first and gets the secret recipe (of course, it is possible that both cooks reach the bottle at the same time).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains five space-separated integers $X_1$, $X_2$, $X_3$, $V_1$ and $V_2$. 

### Output
For each test case, print a single line containing the string `"Chef"` if Chef reaches the bottle first, `"Kefa"` if Kefa reaches the bottle first or `"Draw"` if Chef and Kefa reach the bottle at the same time (without quotes). 

### Constraints 
- $1 \le T \le 10^5$
- $|X_1|, |X_2|, |X_3| \le 10^5$
- $X_1 \lt X_3 \lt X_2$
- $1 \le V_1 \le 10^5$
- $1 \le V_2 \le 10^5$

### Example Input
```
3
1 3 2 1 2
1 5 2 1 2
1 5 3 2 2
```

### Example Output
```
Kefa
Chef
Draw
```

### Explanation

**Example case 1.** Chef and Kefa are on the same distance from the bottle, but Kefa has speed $2$, while Chef has speed $1$.
