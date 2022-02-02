---
{"category_name":"medium","problem_code":"MGICMENU","problem_name":"Magical Menu","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 3\n3 4 3\n2 2 7\n3 5 7","output":"8   \n0   \n3258","explanation":"The eight possible menus for the first morning (first query) are $(3, 4)$, $(4, 3)$, $(3, 3, 4)$, $(3, 4, 3)$, $(3, 4, 4)$, $(4, 3, 4)$, $(4, 3, 3)$, $(4, 4, 3)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"imanik","problem_tester":null,"date_added":"12-07-2019","tags":{"0":"cook108","1":"divide","2":"imanik","3":"inclusion","4":"mobius","5":"prefix","6":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"Divide And Conquer","editorial_url":"https://discuss.codechef.com/problems/MGICMENU","time":{"view_start_date":1563733802,"submit_start_date":1563733802,"visible_start_date":1563733802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MGICMENU","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK108/hindi/MGICMENU.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK108/mandarin/MGICMENU.pdf), [Russian](https://www.codechef.com/download/translated/COOK108/russian/MGICMENU.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK108/vietnamese/MGICMENU.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK108/bengali/MGICMENU.pdf) as well.

In Chefland, there are $M$ types of cookies, numbered $1$ through $M$. There is an infinite supply of cookies of each type. 

Each morning, the Master Chef of Chefland prepares a menu — a sequence of cookies. There may be multiple cookies with identical types in a menu. Two menus are considered different if the total number of cookies in one menu is different from their total number in the other menu or there is a valid index $x$ such that the type of the $x$-th cookie in one menu is different from the type of the $x$-th cookie in the other menu. For example, menus $(1, 2, 1)$, $(1, 2, 1, 2)$ are different, and $(1, 1, 2, 3)$, $(1, 2, 1, 3)$ are also different.

To make things interesting, each morning, Master Chef receives three integers $L$, $R$ and $K$. To prepare a menu on that morning, he may use a cookie of type $x$ only if $L \le x \le R$ and he may not use more than $K$ cookies in total in this menu. For example, when $L = 3$, $R = 5$ and $K = 4$, then $(5, 4, 3, 5)$ and $(3, 5, 5)$ are possible menus, while $(5, 4, 3, 5, 4)$ and $(3, 5, 6)$ are not.

Moreover, a menu becomes *special* only if there is no integer $x \gt 1$ that divides the type of each cookie in the menu, i.e. a menu $S = (s_1, s_2, \ldots, s_n)$ is special if $\mathrm{gcd}\,(s_1, s_2, \ldots, s_n) = 1$.

You should process $Q$ queries. In each query, you are given the parameters $L$, $R$ and $K$ for one morning. Master Chef wonders how many different special menus are possible. Can you help him calculate the number of possible special menus on each morning modulo $2^{30}$?

### Input
- The first line of the input contains two space-separated integers $M$ and $Q$.
- Each of the next $Q$ lines contains three space-separated integers $L$, $R$ and $K$ describing a query.

### Output
For each query, print a single line containing one integer — the number of possible special menus modulo $2^{30}$.

### Constraints 
- $1 \le M \le 10^5$
- $1 \le Q \le 10,000$
- $1 \le L \le R \le M$
- $1 \le K \le 10^9$

### Example Input
```
5 3
3 4 3
2 2 7
3 5 7
```

### Example Output
```
8   
0   
3258
```

### Explanation
The eight possible menus for the first morning (first query) are $(3, 4)$, $(4, 3)$, $(3, 3, 4)$, $(3, 4, 3)$, $(3, 4, 4)$, $(4, 3, 4)$, $(4, 3, 3)$, $(4, 4, 3)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>