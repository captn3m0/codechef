---
{"category_name":"easy","problem_code":"CLBATH","problem_name":"Bathwater","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"meooow","problem_tester":null,"date_added":"1-02-2019","tags":{"0":"basic","1":"cole2019","2":"meooow","3":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CLBATH","time":{"view_start_date":1551205800,"submit_start_date":1551205800,"visible_start_date":1551205800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>


It's winter and taking a bath is a delicate matter. Chef has two buckets of water. The first bucket has $v_1$ volume of cold water at temperature $t_1$. The second has $v_2$ volume of hot water at temperature $t_2$. Chef wants to take a bath with at least $v_3$ volume of water which is at exactly $t_3$ temperature. To get the required amount of water, Chef can mix some water obtained from the first and second buckets.

Mixing $v_x$ volume of water at temperature $t_x$ with $v_y$ volume of water at temperature $t_y$ yields $v_x + v_y$ volume of water at temperature calculated as

$$\frac{v_x t_x + v_y t_y}{v_x + v_y}$$

Help Chef figure out if it is possible for him to take a bath with at least $v_3$ volume of water at temperature $t_3$.

Assume that Chef has no other source of water and that no heat is lost by the water in the buckets with time, so Chef cannot simply wait for the water to cool.

### Input

- The first line contains $n$, the number of test cases. $n$ cases follow.
- Each testcase contains of a single line containing 6 integers $v_1, t_1, v_2, t_2, v_3, t_3$.

### Output

- For each test case, print a single line containing "YES" if Chef can take a bath the way he wants and "NO" otherwise.

### Constraints 

- $1 \leq n \leq 10^5$
- $1 \leq v_1, v_2, v_3 \leq 10^6$
- $1 \leq t_1 < t_2 \leq 10^6$
- $1 \leq t_3 \leq 10^6$

### Sample Input

    3
    5 10 5 20 8 15
    5 10 5 20 1 30
    5 10 5 20 5 20

### Sample Output

    YES
    NO
    YES
	
### Explanation

- **Case 1:** Mixing all the water in both buckets yields 10 volume of water at temperature 15, which is more than the required 8.
- **Case 2:** It is not possible to get water at 30 temperature.
- **Case 3:** Chef can take a bath using only the water in the second bucket.