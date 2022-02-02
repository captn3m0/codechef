---
{"category_name":"medium","problem_code":"HOB","problem_name":"Hotel Balifornia","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"anton_lunyov","date_added":"9-09-2012","tags":{"0":"jan13","1":"medium","2":"pigeonhole","3":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/HOB","time":{"view_start_date":1358248781,"submit_start_date":1358248781,"visible_start_date":1358242651,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Byteland has always been popular among tourists. Seeing a business opportunity, Chef has built a brand new Hotel Balifornia there. The hotel has <b>R</b> unique comfortable rooms for guests' purpose. The rooms are numbered by integers from <b>0</b> to <b>R-1</b>, inclusive. All rooms in the hotel are on the same floor and arranged in a circle. Namely,</p>
<ul>
<li>the room next to the room <b>0</b> is the room <b>1</b>;</li>
<li>the room next to the room <b>1</b> is the room <b>2</b>;</li>
<li>...</li>
<li>the room next to the room <b>R-2</b> is the room <b>R-1</b>;</li>
<li>finally, the room next to the room <b>R-1</b> is the room <b>0</b>.</li>
</ul>

<p>When <b>R = 1</b> we have only one room and it is next to itself.</p>
<p>Below, we will be needing the notion of <b>k</b>-th next room to the given room. It should be quite clear from the notation what does it mean but let's define it formally to avoid any ambiguities. The <b>1</b>-st next room to the room <b>r</b> is simply the next room to the room <b>r</b>. Assume that the notion of <b>(k-1)</b>-th next room is already defined. Then the <b>k</b>-th next room to the room <b>r</b> is the room next to the <b>(k-1)</b>-th next room to the room <b>r</b>.</p>
<p>At the time of check-in, among other things, the guest is required to provide his first name and the number of hours he will be staying in the hotel. Chef has sent a special machine called "Room Number Generator" (RNG) for allocating the rooms to the guests. The RNG takes a string (the first name of the guest) as the input and returns the room id. This is how RNG does it:</p>
<ul>
<li>The string is composed of lowercase and uppercase letters of English alphabet.</li>
<li>At first, uppercase letters (from <b>'A'</b> to <b>'Z'</b>, inclusive) are replaced by the corresponding lowercase letters: <b>'A'</b> by <b>'a'</b>, <b>'B'</b> by <b>'b'</b>, ..., <b>'Z'</b> by <b>'z'</b>.</li>
<li>Next, each letter is replaced by an integer value: <b>'a'</b> by <b>1</b>, <b>'b'</b> by <b>2</b>, ..., <b>'z'</b> by <b>26</b>.</li>
<li>Then we consider thus obtained list of positive integers as a representation of some integer in base <b>33</b>. Namely, if <b>D<sub>1</sub></b>, <b>D<sub>2</sub></b>, ..., <b>D<sub>L</sub></b> is the list of integers obtained after encoding all the letters we will consider the following value: <b>D<sub>1</sub> * 33<sup>L-1</sup> + D<sub>2</sub> * 33<sup>L-2</sup> + ... + D<sub>L-1</sub> * 33 + D<sub>L</sub></b>.</li>
<li>Finally, RNG takes the remainder of division of the number, obtained at the previous step, by the number of rooms in the hotel. So this will be <b>(D<sub>1</sub> * 33<sup>L-1</sup> + D<sub>2</sub> * 33<sup>L-2</sup> + ... + D<sub>L-1</sub> * 33 + D<sub>L</sub>) mod R</b>. This value is the room id returned by RNG. Well, at least Chef deems that RNG returns this value...</li>
</ul>

<p>Consider some examples:</p>
<ul>
<li><b>"Ab"</b> will be at first replaced by <b>"ab"</b> and then will be represented as <b>1 * 33 + 2 = 35</b>. If the number of rooms in the hotel is <b>40</b> then the room will be <b>35 mod 40 = 35</b>.</li>
<li><b>"Chef"</b> will be at first replaced by <b>"chef"</b> and then will be represented as <b>3 * 33<sup>3</sup> + 8 * 33<sup>2</sup> + 5 * 33 + 6 = 116694</b>. If the number of rooms in the hotel is <b>37</b> then the room will be <b>116694 mod 37 = 33</b>.</li>
</ul>

<p>Chef noted that for some unlucky values of <b>R</b> regardless of the name of the guest, RNG returns only rooms from some range that does not cover all rooms in the hotel. This, of course, would be disaster for Chef. For example, for <b>R = 33</b> rooms <b>0, 27, 28, 29, 30, 31, 32</b> can not be the values returned by RNG. Chef is smart guy and quickly realizes that this happens if and only if <b>R</b> is divisible by <b>33</b>. Hence he ensures that the number of rooms in the hotel is not divisible by <b>33</b>.</p>
<p>The hotel manager was having fun time, 'RNGing' the names of his acquaintances, just when he discovered that his wife's RNG number came out the same as his friend's! Horrified he visited the VP and explained the problem that different guests may end up in the same room. The VP thought for a moment, and then suggested that the one who comes later be allotted a different room. How clever! But which room? The hotel management fought for several days over this. Ultimately the lift boy's scheme was taken up.</p>
<ul>
<li>The lift boy is fond of sequences and number theory. Hence he will use the following sequence in his scheme: <b>1, 2, 3, 6, 11, 20, 37, ...</b> Here each term of the sequence, starting from the 4-th one, equals to the sum of three previous terms. We denote the <b>n</b>-th term of this sequence as <b>A<sub>n</sub></b>. So <b>A<sub>1</sub> = 1</b>, <b>A<sub>2</sub> = 2</b>, <b>A<sub>3</sub> = 3</b>, <b>A<sub>4</sub> = 6</b>, and so on.</li>
<li>Assume that RNG number of the current guest is <b>r<sub>0</sub></b>.</li>
<li>At first we check the room <b>r<sub>0</sub></b> and if it is free we settle guest in this room.</li>
<li>Otherwise, we check the room <b>r<sub>1</sub></b> which is <b>A<sub>1</sub></b>-th next to the room <b>r<sub>0</sub></b>. If it is free we settle guest in this room. Note that since <b>A<sub>1</sub> = 1</b> then, actually, <b>r<sub>1</sub></b> is simply the next room to <b>r<sub>0</sub></b>.</li>
<li>Otherwise, we check the room <b>r<sub>2</sub></b> which is <b>A<sub>2</sub></b>-th next to the room <b>r<sub>1</sub></b>. If it is free we settle guest in this room. Note that since <b>A<sub>2</sub> = 2</b> then, <b>r<sub>2</sub></b> is the room, next to the room that is next to the room <b>r<sub>1</sub></b> (ignore this, if it blows your mind).</li>
<li>In general, at <b>k</b>-th step we have all rooms <b>r<sub>0</sub></b>, <b>r<sub>1</sub></b>, ..., <b>r<sub>k-1</sub></b> occupied and we check the room <b>r<sub>k</sub></b> which is <b>A<sub>k</sub></b>-th next to the room <b>r<sub>k-1</sub></b>. If it is free we settle guest in this room and finish the process. Otherwise we continue.</li>
<li>If we can't find the free room in any finite number of steps, we inform the guest that we unable to settle him. In this case we provide him the minimal number of minutes after which he could come again so that we could find the free room for him by the above scheme, <b>assuming that we start the process again from the room <b>r<sub>0</sub></b></b>.</li>
<li>Please, be sure that you are using exactly this definition to find the required number of minutes. According to some weird facts about 'RNG' below, the room 'RNGing' to the guest later could differ from <b>r<sub>0</sub></b>, but we still use the old value to perform the lift boy's scheme.</li>
<li>Actually, no guest will return back to the hotel if we ask him to come back later without settling him in some room. The reason is that only celebrities visit Chef's hotel (see the example ;)) and they take a huge offense to the Chef if they were not settled in any room. Hence they will never return to the hotel again in this case. So actually we inform them the minimal number of minutes just out of courtesy :)</li>
</ul>

<p>Chef hears this and is a bit worried about guests' response, so he requests you to analyze the inconvenience that will be caused to the guests. If the guest was settled in some room, the inconvenience equals to the least integer <b>k</b> for which the room <b>r<sub>k</sub></b> is free, so, actually, it is the number of rooms that was found occupied while processing this guest. Otherwise it is equal to the number of minutes he should wait to come again if no free room was found for him by lift boy's scheme. </p>
<p>After invention of the lift boy's scheme Chef also realizes that his old fears about unlucky values of <b>R</b> is useless but still he believes that values of <b>R</b> divisible by <b>33</b> could lead to larger average guests' inconvenience than other values of <b>R</b>. So, just in case, he still ensures that <b>R</b> is not divisible by <b>33</b>.</p>
<p>What Chef and hotel management does not realize is that RNG has a mind of its own. Don't get scared! It just remembers the inconvenience caused to each guest and it uses this information to adjust the returned value. Namely, RNG add to the initial RNG value described above the sum of inconveniences caused to all previous guests. Then this number is taken modulo <b>R</b> to get the correct room number and RNG returns it. See example for clarity.</p>
<p>You will be given the list of all visits to the Hotel Balifornia in increasing order of time and should output the inconvenience caused to each guest. To make the output more readable print the dash before the inconvenience of each guest that was not settled in any room.</p>
<p>Also note that Chef's hotel is very popular, so the time interval between two consecutive visits is strictly less than 24 hours. Hence we will be providing only hour and minute of the day for each visit.</p>
<p>We could have several visits at the same moment of time. In this case we process guests in order they appear in the input.</p>
<p> If we have a visiting guest and some other guest leaving the hotel at the same moment, then the room which will be vacated by the leaving guest will be considered as free when applying the lift boy's scheme to the visiting guest. The same is true when deciding the waiting minutes for not settled guests.</p>
<p>We assume that all guests are different. But they could have equal first names. Indeed, Daniel Craig and Daniel Radcliffe are different persons having equal first names :)</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>N</b> and <b>R</b>, denoting the number of visits to the hotel and the number of rooms in the hotel respectively. The description of <b>N</b> visits follows. Namely, each of the following <b>N</b> lines contains 3 space separated integers <b>H</b>, <b>M</b>, <b>G</b> followed by a space and the string <b>S</b>. Here <b>H</b> and <b>M</b> is the hour and the minute of the day at which guest comes. Recall that visits are given in increasing order of time but the time interval between two consecutive visits is strictly less than 24 hours. <b>G</b> is the number of hours for which the guest will stay and <b>S</b> is his/her first name.</p>
<h3>Output</h3>
<p>For each visit of each test, output a single line containing the inconvenience caused to the guest who made this visit. Don't forget to output '-' (dash) before result for each guest that should wait (see above). Please do not consider this dash as minus sign and do not assume that inconvenience is negative in this case. This dash is used only to make output more readable and have no effect on the actual inconvenience value.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>1000</b></li>
<li><b>1</b> &le; <b>N</b> &le; <b>200000</b> (<b>2 * 10<sup>5</sup></b>)</li>
<li><b>1</b> &le; <b>R</b> &le; <b>500</b> (<b>R</b> is not divisible by <b>33</b>)</li>
<li><b>0</b> &le; <b>H</b> &le; <b>23</b></li>
<li><b>0</b> &le; <b>M</b> &le; <b>59</b></li>
<li><b>0</b> &le; <b>G</b> &le; <b>9999999</b> (<b>10<sup>7</sup> &minus; 1</b>)</li>
<li>The total number of visits over the input does not exceed <b>200000</b> (<b>2 * 10<sup>5</sup></b>)</li>
<li>The name of each guest contains only uppercase and lowercase letters of English alphabet and has length from 1 to 10, inclusive</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
8 4
0 10 15 Brad
0 12 6 Kanye
1 10 24 Angelina
5 38 48 John
12 55 56 Bill
12 56 6 Tom
20 1 2 Nicole
3 0 24 Daniel

<b>Output:</b>
0
0
0
2
2
-134
1
1
</pre><h3>Explanation</h3>
<table width="100%" cellpadding="5" cellspacing="0" border="1">
<tr>
<td>Guest's name</td>
<td>Cur Time</td>
<td>Prev. inconv.</td>
<td>RNG output</td>
<td>Room</td>
<td>Status</td>
<td>Order of rooms</td>
<td>Output</td>
</tr>
<tr>
<td>Brad</td>
<td>00:10</td>
<td>0</td>
<td>91513 + 0</td>
<td>1</td>
<td><code>----</code></td>
<td>1</td>
<td>0</td>
</tr>
<tr>
<td>Kanye</td>
<td>00:12</td>
<td>0</td>
<td>13097144 + 0</td>
<td>0</td>
<td><code>-B--</code></td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>Angelina</td>
<td>01:10</td>
<td>0</td>
<td>60979313407 + 0</td>
<td>3</td>
<td><code>KB--</code></td>
<td>3</td>
<td>0</td>
</tr>
<tr>
<td>John</td>
<td>05:38</td>
<td>0</td>
<td>375983 + 0</td>
<td>3</td>
<td><code>KB-A</code></td>
<td>3 &rarr; 0 &rarr; 2</td>
<td>2</td>
</tr>
<tr>
<td>Bill</td>
<td>12:55</td>
<td>2</td>
<td>82083 + 2</td>
<td>1</td>
<td><code>-BJA</code></td>
<td>1 &rarr; 2 &rarr; 0</td>
<td>2</td>
</tr>
<tr>
<td>Tom</td>
<td>12:56</td>
<td>4</td>
<td>22288 + 4</td>
<td>0</td>
<td><code>BBJA</code></td>
<td>0 &rarr; 1 &rarr; 3 &rarr; 2</td>
<td>-134</td>
</tr>
<tr>
<td>Nicole</td>
<td>20:01</td>
<td>138</td>
<td>558693338 + 138</td>
<td>0</td>
<td><code>B-JA</code></td>
<td>0 &rarr; 1</td>
<td>1</td>
</tr>
<tr>
<td>Daniel</td>
<td>03:00</td>
<td>139</td>
<td>158240589 + 139</td>
<td>0</td>
<td><code>B-J-</code></td>
<td>0 &rarr; 1</td>
<td>1</td>
</tr>
</table>
<p>
<ul>
<li>The <b>Prev. inconv.</b> column contains the total inconvenience caused to all previous guests.</li>
<li>By <b>RNG output</b> here we mean the value before taking it modulo <b>R</b>.</li>
<li>The <b>Room</b> column contains the room that was initially assigned to the guest and it is the actual value returned by RNG. It is equal to the value in the previous column take modulo <b>R = 4</b>.</li>
<li>The <b>Status</b> column contains the current status of each room: '-' indicates a free room, while uppercase letter indicates that the room is occupied by the person whose first name starts at this letter.</li>
<li>The <b>Order of rooms</b> column contains the sequence of rooms produced by the lift boy's scheme for the current guest.</li>
<li><b>Note on the Tom's visit.</b> After 4 steps of the lift boy's scheme we found out that all rooms in the hotel are occupied. Hence we can't settle Tom in any room. The room that will become free next is the room 1 occupied currently by Brad. This will happen at 15:10 which is 134 minutes after the 12:56 (the time of Tom's visit).</li>
<li><b>Note on the Daniel's visit.</b> We see that his visit time is less than for the previous visit. So it seems to violate the following constraint: times of visits are given in increasing order. In fact, this only means that Daniel came next day! (Again recall that the time interval between two consecutive visits is strictly less than 24 hours.)</li>
</ul>
</p>
