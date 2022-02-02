---
{"category_name":"hard","problem_code":"NPIN","problem_name":"Needles and Pins","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"gamabunta","date_added":"30-12-2012","tags":{"0":"geometry","1":"hard","2":"july13","3":"line","4":"line","5":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/NPIN","time":{"view_start_date":1373880600,"submit_start_date":1373880600,"visible_start_date":1373880600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Few people know that the Chef is also a modern artist. In his spare time, he makes paintings which do not stink of traditions. They are like whiffs of fresh air, full of experimentation. So, now you know all those err.. beautiful pieces of art in the Chef’s restaurant, are his own works!</p>
<p>Here is how he makes a piece of modern art - First he takes a large thin wooden board. Then he draws a big polygon on it, using crayons. Then in several wild swings, he draws several lines on the board. You may think it is simple, but it is not so. After so many years of experience in slicing potatoes and tomatoes he has become very accurate in marking points on the board. So what is remarkable is, that every corner of the polygon, and every starting and ending point of the line is an integral point, i.e can be represented as &lt;x, y> where x and y both are integers. Another point worth pointing out is that Chef believes in symmetry. This is visible from following fact- "If we divide entire wooden board into 16 square shaped (virtual) regions, the difference in number of lines <i>contained</i> in the region with maximum lines and the region with minimum lines does not exceed 50%". A region is said to <i>contain</i> a line if at least one end point of line is inside it.</p>
<p>It doesn't end here. Then the Chef takes colourful (sewing) needles and nails them on every point on the line traced by crayon, such that the point is integral and it lies either on or inside the polygon. As polygon boundaries are also lines, needles are pinned on them as well. Finally he takes board pins with colourful heads and pins them inside the polygon such that the point is not already occupied by needle and the point is integral. Lo and behold! The painting is ready!</p>
<p>The needles and board pins are rather costly, so the Chef neither wants to buy the needles and pins in excess, nor does he want to run short of them. Now, he needs your help to tell him the exact number of needles and pins that he would require. We can hear the Chef singing “..and still it begins, needles and pins ♪♫...” slowly.</p>
<h3>Input</h3>
<p>First line contains an integer <b>T</b>, the number of test cases. For each test case - first line contains two integers <b>N</b>, number of vertices of polygon and <b>M</b>, number of lines. Then <b>N</b> lines follow, each containing 2 space separated integers <b>X Y</b> denoting the ith vertex. The vertices are given anti-clockwise. Next <b>M</b> lines contains 4 space separated integers <b>X1 Y1 X2 Y2</b> denoting 2 end points of the jth line. No line is longer than 10000 units in length.</p>
<h3>Output</h3>
<p>For each test case - output on a single line the number of needles required and the number of pins required.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 5</b><br/><b>3 ≤ N ≤ 50</b><br/><b>0 ≤ M ≤ 10000</b><br/><b>-500000 ≤ X, Y, X1, Y1, X2, Y2 ≤ 500000</b></br/></br/></br/></p>
<h3>Sample</h3>
<pre>
<b>Input</b>
1
4 4
0 0
6 0
4 2
2 2
1 0 4 0
2 4 2 -1
0 0 -1 -1
0 1 3 1

<b>Output</b>
14 1

</pre><h3>Note</h3>
<p>1) The symmetry constraint - "If we divide entire wooden board into 16 square shaped (virtual) regions .... " is enforced only if number of lines (<b>M</b>) is ≥ 1000.</p>
<p>2) The polygon is convex.</p>
