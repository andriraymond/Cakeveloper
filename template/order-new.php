<div class="container" style="margin-top:20px">
    <h1 class="text-center">New Order</h1>
    <h3 class="text-center">For new order, please complete the following form.</h3>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <form method="post">
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="customer"><b>Customer Name*</b></label>
                            <input type="text" id="customer" name="customer" class="form-control" value="{{ user? user : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="address"><b>Address*</b></label>
                            <textarea rows="2" id="address" name="address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone"><b>Phone</b></label>
                            <input type="text" id="phone" name="phone" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-6 border-left">
                        <div class="form-group">
                            <label for="cake"><b>Cake*</b></label>
                            <select name="cake" class="form-control" id="cake">
                                {% for cake in cakes %}
                                <option value="{{ cake.code }}">{{ cake.name }} (${{ cake.price }})</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity"><b>Quantity*</b></label>
                            <select name="quantity" class="form-control" id="quantity">
                                {% for i in 1..5 %}
                                <option value="{{ i }}">{{ i }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <span><i><b>Note:</b> fields with * are required</i></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-8">
                        <input class="btn btn-primary btn-block" type="submit" value="Place Order">
                    </div>
                </div>
                <input type="hidden" name="action" value="place-order">
            </form>
        </div>
    </div>
</div>
