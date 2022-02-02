---
{"category_name":"school","problem_code":"COUPON2","problem_name":"Chef and Coupon","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/Hrw_RNQzlzw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"26-02-2021","tags":{"0":"akash_adm","1":"cakewalk","2":"start1","3":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COUPON2","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COUPON2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START1/bengali/COUPON2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START1/mandarin/COUPON2.pdf), [Russian](https://www.codechef.com/download/translated/START1/russian/COUPON2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START1/vietnamese/COUPON2.pdf) as well.

Chef wants to order food from a food delivery app. He wishes to order once today, and buy three items costing $A_1, A_2$ and $A_3$ rupees, respectively. He'll also order once tomorrow, when he'll buy three items costing $B_1, B_2$ and $B_3$ rupees, respectively. There is an additional delivery charge of rupees $D$ for each order.

He notices that there is a coupon on sale, which costs rupees $C$. If he buys that coupon, the delivery charges on any day, on an order of rupees $150$ or more shall be waived (that is, the $D$ rupees will not be added, if the sum of the costs of the items is $\ge 150$). 

Note that Chef is ordering the three items together on each day, so the delivery charge is charged only once each day. Also, note that it's only needed to buy the coupon once to avail the delivery fee waiver on both days.

Should Chef buy the coupon? Note that Chef shall buy the coupon only if it costs him **strictly less** than what it costs him without the coupon, in total.

###Input:

- The first line of the input contains a single integer $T$, denoting the number of test cases. 
- The first line of each test case contains two space-separated integers $D$ and $C$, denoting the delivery charge, and the price of the coupon, respectively.
- The second line of each test case contains three space-separated integers $A_1, A_2$ and $A_3$, denoting the prices of the food items that Chef plans to order on Day $1$, respectively.
- The third line of each test case contains three space-separated integers $B_1$, $B_2$ and $B_3$, denoting the prices of the food items that Chef plans to order on Day $2$, respectively.

###Output:
For each test case, output **YES** if Chef should buy the coupon, and **NO** otherwise, in a separate line.

###Constraints 
- $1 \le T \le 10^4$
- $1 \le D,C \le 100$
- $1 \le  A_1, A_2, A_3  \le 100$
- $1 \le B_1, B_2, B_3 \le 100$

###Sample Input 1:
```
2
90 100
100 50 10
80 80 80
30 30
100 100 100
10 20 30
```
###Sample Output 1:
```
YES
NO
```
###Explanation:
**Testcase 1:** On the first day, Chef plans on ordering three food items, costing a total of rupees $(100+50+10)=160$.   On the second day, Chef plans on ordering three food items, costing a total of rupees $(80+80+80)=240$.     

If Chef buys the coupon he shall save the delivery charge on both days, but the coupon shall cost him rupees $100$ extra. In total, it shall cost him $(160+240+100)=500$. 

Without the coupon, Chef will have to pay the delivery charges for both days, which shall cost him a total of rupees $(160+240+90+90)=580$. 

Thus, it's better for Chef to buy the coupon.

**Testcase 2:** On the first day, Chef plans on ordering three food items, costing a total of rupees $(100+100+100)=300$.   On the second day, Chef plans on ordering three food items, costing a total of rupees $(10+20+30)=60$.  

If Chef buys the coupon he shall save the delivery charge on only the first day, but the coupon shall cost him rupees $30$ extra. In total, it shall cost him $(300+60+30$ (coupon cost) $+30$ (delivery cost for second day)$)=420$. 

Without the coupon, Chef will have to pay the delivery charges for both days, which shall cost him a total of rupees $(300+60+30$ (delivery cost for first day)$+30$ (delivery cost for second day)$)=420$. 

Since it shall cost him the same amount in both the cases, Chef shall not buy the coupon.

###Sample Input 2:
```
1
30 45
100 100 100
10 20 30
```
###Sample Output 2:
```
NO
```
###Explanation:
**Testcase 1:** On the first day, Chef plans on ordering three food items, costing a total of rupees $(100+100+100)=300$.   On the second day, Chef plans on ordering three food items, costing a total of rupees $(10+20+30)=60$.  

If Chef buys the coupon he shall save the delivery charge on only the first day, but the coupon shall cost him rupees $45$ extra. In total, it shall cost him $(300+60+45$ (coupon cost) $+30$ (delivery cost for second day)$)=435$. 

Without the coupon, Chef will have to pay the delivery charges for both days, which shall cost him a total of rupees $(300+60+30$ (delivery cost for first day)$+30$ (delivery cost for second day)$)=420$. 

Since it shall cost him strictly more amount when he buys the coupon, Chef shall not buy the coupon.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>