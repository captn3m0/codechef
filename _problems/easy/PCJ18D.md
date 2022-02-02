---
{"category_name":"easy","problem_code":"PCJ18D","problem_name":"Chef and Cookies","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"madhav_1999","problem_tester":null,"date_added":"28-07-2018","tags":{"0":"madhav_1999","1":"madhav_1999","2":"pcj","3":"prakhar17252","4":"proconjunior","5":"tanmay28"},"editorial_url":"https://discuss.codechef.com/problems/PCJ18D","time":{"view_start_date":1534176000,"submit_start_date":1534176000,"visible_start_date":1534176000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef is baking delicious cookies today! Since Chef is super hungry, he wants to eat at least $N$ cookies.

Since Chef is a messy eater, he drops a lot of crumbs. Crumbs of $B$ cookies can be put together to make a new cookie! 

Given $N$ and $B$, help Chef find out the minimum number of cookies he must initially bake, $A$, to satisfy his hunger.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of  two space separated integers $N, B$. 

###Output:
For each test case, print a single integer $A$, the minimum number of cookies Chef must bake initially.

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 1000000000$
- $2 \leq B \leq 1000000000$

###Sample Input 1:
        1
        3 2

###Sample Output 1:
        2


###Sample Input 2:
        1
        11 2

###Sample Output 2:
        6


###Explanation 2:
Chef initially make 6 cookies. From the crumbs, Chef makes 3 new cookies with no crumbs left over. From the crumbs of the new cookies, Chef makes 1 new cookie and have crumbs left from one cookie. From the new cookie, Chef gets more crumbs. He adds the crumbs and gets one last cookie. After eating that, there are not enough crumbs left to make a new cookie. So a total of 11 cookies are consumed!